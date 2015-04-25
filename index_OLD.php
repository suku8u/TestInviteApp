[SalesIntelligence_Rpts].[ProspectPipeline].[PotentialCloseDatetime] BETWEEN  C

CHAR({YEAR}(DATEADD({MM},-3,GETDATE)))+CHAR({MM}(DATEADD({MM},-3,GETDATE)))+'15' 


AND  CHAR({YEAR}(GETDATE))+CHAR({MM}(GETDATE))+'15' 