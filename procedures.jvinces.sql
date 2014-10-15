ALTER PROCEDURE shm_inc.USP_INC_S_INCIDENCIAS 
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
		END
END
GO
