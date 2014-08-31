USE [sigpi]
GO

IF OBJECT_ID(N'shm_per.USP_PER_I_PERSONA', N'P') IS NOT NULL
	DROP PROCEDURE shm_per.USP_PER_I_PERSONA
GO

CREATE PROCEDURE shm_per.USP_PER_I_PERSONA @cPerApellidoPaterno VARCHAR(80)
	,@cPerApellidoMaterno VARCHAR(80)
	,@cPerNombres VARCHAR(200)
	,@error INT
AS
SET NOCOUNT ON

BEGIN TRANSACTION

BEGIN TRY
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
		,GETDATE()
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

