IF OBJECT_ID (N'shm_inc.USP_INC_S_INCIDENCIAS', N'P') IS NOT NULL
DROP PROCEDURE shm_inc.USP_INC_S_INCIDENCIAS
GO
CREATE PROCEDURE shm_inc.USP_INC_S_INCIDENCIAS 
	-- Add the parameters for the stored procedure here
	@accion varchar(50), 
	@codigo int = 0
AS
BEGIN
	SET NOCOUNT ON;
	IF @accion = 'nuevos'
		BEGIN
		select inc.nIncId
			,ei.cEinDescripcion
			,(select Pers.cPerNombres+' '+Pers.cPerApellidoPaterno+' '+Pers.cPerApellidoMaterno from shm_per.PERSONA Pers where inc.nPerId=Pers.nPerId)as Usuario
			,inc.cIncAsunto
			,concat(convert(varchar,inc.fIncFechaRegistro,103 ),' ',convert(varchar,inc.fIncFechaRegistro,108 )) as fIncFechaRegistro 
		from shm_inc.INCIDENCIA AS inc
			inner join shm_inc.RECURSO_INCIDENCIA AS rin ON rin.nIncId = inc.nIncId
			inner join shm_inc.RECURSO as rec on rec.nRecId = rin.nRecId
			inner join shm_inc.ESTADO_INCIDENCIA as ei on ei.nEinId = inc.nEinId
		where 
			inc.cIncEliminado<>1 and
			inc.cIncEliminado<>3 and             
			ei.bEinEliminado<>0   and inc.nEinId=1  
		ORDER BY convert(varchar,inc.fIncFechaRegistro,108 ) DESC
		END
END
GO

IF OBJECT_ID (N'shm_inc.USP_INC_I_REQUERIMIENTO', N'P') IS NOT NULL
DROP PROCEDURE shm_inc.USP_INC_I_REQUERIMIENTO
GO
CREATE PROCEDURE shm_inc.USP_INC_I_REQUERIMIENTO @nReTipo INT
	,@dReFecha DATE
	,@motivo VARCHAR(max)
	,@nPerIdSolicitante INT
	,@nTreId INT
	,@error INT OUT
AS
BEGIN TRANSACTION

BEGIN TRY
	INSERT INTO [shm_inc].[REQUERIMIENTO] (
		[nReTipo]
		,[cReMotivo]
		,[dReFechaRequerimiento]
		,[nPerIdSolicitante]
		,[cReEstado]
		,[nTreId]
		)
	VALUES (
		@nReTipo
		,@motivo
		,@dReFecha
		,@nPerIdSolicitante
		,1
		,@nTreId
		)

	SET @error = 1

	COMMIT TRANSACTION
END TRY

BEGIN CATCH
	ROLLBACK TRANSACTION

	SET @error = 0
END CATCH
GO

-----------------------------------------------------------------------------------------------------------


IF OBJECT_ID (N'shm_inc.USP_INC_S_REQUERIMIENTO ', N'P') IS NOT NULL
DROP PROCEDURE shm_inc.USP_INC_S_REQUERIMIENTO 
GO
CREATE PROCEDURE shm_inc.USP_INC_S_REQUERIMIENTO 
	-- Add the parameters for the stored procedure here
	@accion varchar(50), 
	@codigo int = 0
AS
BEGIN
	SET NOCOUNT ON;
	IF @accion = 'nuevos'
		BEGIN
			SELECT nReId
				,dReFechaRegistro
				,cReMotivo
				,tr.cTreDescripcion
				,CONVERT(varchar(10), r.dReFechaRequerimiento, 105)
				,CONCAT (
					p.cPerApellidoPaterno
					,' '
					,p.cPerApellidoMaterno
					,' '
					,p.cPerNombres
					) AS nombre
			FROM shm_inc.REQUERIMIENTO AS r
			INNER JOIN shm_per.PERSONA AS p ON r.nPerIdSolicitante = p.nPerId
			INNER JOIN shm_inc.TIPO_RECURSO AS tr ON tr.nTreId = r.nReTipo
			WHERE r.cReEstado = 1
		END
END
GO
---------------------------------------------
IF OBJECT_ID (N'shm_inc.USP_INC_I_INCIDENCIA ', N'P') IS NOT NULL
DROP PROCEDURE shm_inc.USP_INC_I_INCIDENCIA 
GO
CREATE PROCEDURE shm_inc.USP_INC_I_INCIDENCIA
	@nPerId int
	,@nIncMedioDeSolicitud tinyint
	,@cIncAsunto VARCHAR(max)
	,@error INT OUT
AS 
BEGIN TRANSACTION
		 BEGIN TRY
INSERT INTO [shm_inc].[INCIDENCIA]
           (
			[nPerId]
           ,[nIncMedioDeSolicitud]
           ,[cIncAsunto]
           ,[fIncFechaRegistro]
           ,[cIncEliminado]
		   ,[nEinId]
		   )
     VALUES
           (@nPerId
           ,@nIncMedioDeSolicitud
           ,@cIncAsunto
           ,getdate()
           ,0
           ,1)
		 SET @error = (select top 1 nIncId from shm_inc.INCIDENCIA order by 1 desc)
	   	COMMIT TRANSACTION
END TRY

BEGIN CATCH
	ROLLBACK TRANSACTION

	SET @error = 0
END CATCH
GO
---------------------
IF OBJECT_ID (N'shm_inc.USP_INC_I_RECURSO_INCIDENCIA ', N'P') IS NOT NULL
DROP PROCEDURE shm_inc.USP_INC_I_RECURSO_INCIDENCIA 
GO
CREATE PROCEDURE shm_inc.USP_INC_I_RECURSO_INCIDENCIA
	@nIncId int
	,@nRecId varchar(max)
	,@error INT OUT
AS 
BEGIN TRANSACTION
		 BEGIN TRY
		 CREATE TABLE #recIncidencia(nRecId INT)
		 INSERT #recIncidencia SELECT * FROM fnSplit(@nRecId,',')

		INSERT [shm_inc].[RECURSO_INCIDENCIA]([nIncId],[nRecId])
		SELECT @nIncId,nRecId FROM #recIncidencia

		SET @error = 1
	   	COMMIT TRANSACTION
		
END TRY

BEGIN CATCH
	ROLLBACK TRANSACTION

	SET @error = 0
END CATCH
GO