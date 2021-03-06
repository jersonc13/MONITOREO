USE [sigpi]
GO
/****** Object:  StoredProcedure [shm_inc].[USP_INC_S_INCIDENCIAS]    Script Date: 20/11/2014 12:20:57 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER PROCEDURE [shm_inc].[USP_INC_S_INCIDENCIAS] 
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
	IF @accion = 'copia'
		BEGIN

		select 	   top 20
		[ClientIP]	   as ip
      ,[ClientUserName]		as usuario
      ,[ClientAgent]				  as agente
      ,[uri]								   as uri
      ,[SrcNetwork]									 as srcNetwork
		from [copia].dbo.WebProxyLog where SrcNetwork = 'LAB-E306' order by logTime desc	
	END
END