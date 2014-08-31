USE [sigpi]
GO

IF OBJECT_ID(N'shm_per.USP_PER_I_PERSONA', N'P') IS NOT NULL
	DROP PROCEDURE shm_per.USP_PER_I_PERSONA
GO

CREATE PROCEDURE shm_per.USP_PER_I_PERSONA @cPerApellidoPaterno VARCHAR(80)
	,@cPerApellidoMaterno VARCHAR(80)
	,@cPerNombres VARCHAR(200)
	,@error INT OUT
AS
SET NOCOUNT ON

BEGIN TRANSACTION

BEGIN TRY
	DECLARE @dat date = ( select GETDATE() )
	INSERT INTO [shm_per].[PERSONA] (
		[cPerApellidoPaterno]
		,[cPerApellidoMaterno]
		,[cPerNombres]
		,[bPerEstado]
		,[fPerFechaRegistro]
		)
	VALUES (
		@cPerApellidoPaterno
		,@cPerApellidoMaterno
		,@cPerNombres
		,1
		,@dat
		)

	SET @error = (
			SELECT TOP 1 nPerId
			FROM shm_per.PERSONA
			ORDER BY 1 DESC
			)

	COMMIT TRANSACTION
END TRY

BEGIN CATCH
	ROLLBACK TRANSACTION

	SET @error = 0
END CATCH
GO

--------------------------------------
IF OBJECT_ID(N'shm_seg.USP_USU_I_USUARIO', N'P') IS NOT NULL
	DROP PROCEDURE shm_seg.USP_USU_I_USUARIO
GO

CREATE PROCEDURE shm_seg.USP_USU_I_USUARIO @nPerId INT
	,@cUsuNick VARCHAR(100)
	,@cUsuClave VARCHAR(40)
	,@nUsuTipo TINYINT
	,@error INT OUT
AS
SET NOCOUNT ON

BEGIN TRANSACTION

BEGIN TRY
	INSERT INTO [shm_seg].[USUARIO] (
		[nPerId]
		,[cUsuNick]
		,[cUsuClave]
		,[bUsuEstado]
		,[nUsuTipo]
		)
	VALUES (
		@nPerId
		,@cUsuNick
		,@cUsuClave
		,1
		,@nUsuTipo
		)

	SET @error = (
			SELECT TOP 1 nPerId
			FROM shm_seg.USUARIO
			ORDER BY 1 DESC
			)

	COMMIT TRANSACTION
END TRY

BEGIN CATCH
	ROLLBACK TRANSACTION

	SET @error = 0
END CATCH
GO

