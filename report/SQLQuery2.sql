SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER PROCEDURE shm_inc.USP_INC_S_REPORTES
	-- Add the parameters for the stored procedure here
	@accion varchar(70)  = 'requerimiento',
	@opcion1 varchar(20)	,
	@opcion2 varchar(20)
AS
BEGIN
	SET NOCOUNT ON;
	IF @accion = 'requerimiento'
		BEGIN
			SELECT req.nReId AS codigo
				--,req.cReMotivo AS motivo
				,convert(varchar(10),req.dReFechaRegistro,105) as fecha
				,CONCAT (
					per.cPerApellidoPaterno
					,' '
					,per.cPerApellidoMaterno
					,' '
					,per.cPerNombres
					) AS solicitante
				,CONCAT (
					per2.cPerApellidoPaterno
					,' '
					,per2.cPerApellidoMaterno
					,' '
					,per2.cPerNombres
					) AS responsable
				,tr.cTreDescripcion AS recurso
				,CASE ar.cAteEstado
				WHEN 1 THEN 'ASIGNADO'
				WHEN 2 THEN 'TRABAJANDO'
				WHEN 3 THEN 'SOLUCIONADO'
				END AS estado
			FROM shm_inc.REQUERIMIENTO AS req
			INNER JOIN shm_inc.ATENCION_REQUERIMIENTO as ar on ar.nReId = req.nReId
			INNER JOIN shm_inc.TIPO_RECURSO AS tr ON tr.nTreId = req.nTreId
			INNER JOIN shm_per.PERSONA per ON per.nPerId = req.nPerIdSolicitante
			INNER JOIN shm_per.PERSONA per2 ON per2.nPerId = ar.nPerIdResponsable

			where ar.cAteEstado = 2 --AND ar.fAteFechaRegistro BETWEEN @opcion1 AND @opcion2;
		END
END
GO