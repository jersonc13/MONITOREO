CREATE PROCEDURE  shm_inc.USP_REQ_I_REQUERIMIENTO_ATENCION
	@nReId int
	,@nPerIdSolicita INT
	,@nPerIdResponsable INT
	,@cAteObservacion varchar(500)
	,@error INT OUT
AS 
BEGIN TRANSACTION
		 BEGIN TRY
INSERT INTO [shm_inc].[ATENCION_REQUERIMIENTO]
           ([nReId]
           ,[nPerIdSolicita]
           ,[nPerIdResponsable]
           ,[cAteObservacion])
     VALUES
           (@nReId
           ,@nPerIdSolicita
		   ,@nPerIdResponsable
           ,@cAteObservacion)
		SET @error = 1
	   	COMMIT TRANSACTION
		
END TRY

BEGIN CATCH
	ROLLBACK TRANSACTION

	SET @error = 0
END CATCH
