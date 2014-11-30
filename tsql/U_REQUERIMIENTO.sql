CREATE PROCEDURE shm_inc.USP_REQ_U_REQUERIMIENTO 
	-- Add the parameters for the stored procedure here
	@nRecId int = 0, 
	@estado char(1) = 0
	,@error INT OUT
AS
SET NOCOUNT ON

BEGIN TRANSACTION

BEGIN TRY
	update shm_inc.REQUERIMIENTO set cReEstado=@estado where nReId = @nRecId

	SET @error = 1

	COMMIT TRANSACTION
END TRY

BEGIN CATCH
	ROLLBACK TRANSACTION

	SET @error = 0
	SET @error = 0
END CATCH
GO