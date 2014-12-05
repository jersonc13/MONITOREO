SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER PROCEDURE shm_inc.USP_INC_S_REPORTES
	-- Add the parameters for the stored procedure here
	@accion varchar(70)  = 'requerimiento'
AS
BEGIN
	SET NOCOUNT ON;
	IF @accion = 'requerimiento'
		BEGIN
			SELECT req.nReId AS codigo
				,req.cReMotivo AS motivo
				,CONCAT (
					per.cPerApellidoPaterno
					,' '
					,per.cPerApellidoMaterno
					,' '
					,per.cPerNombres
					) AS solicitante
				,tr.cTreDescripcion AS recurso
			FROM shm_inc.REQUERIMIENTO AS req
			INNER JOIN shm_inc.TIPO_RECURSO AS tr ON tr.nTreId = req.nTreId
			INNER JOIN shm_per.PERSONA per ON per.nPerId = req.nPerIdSolicitante

		END
END
GO