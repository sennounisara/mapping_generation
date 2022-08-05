<?php



/**
 * This class defines the structure of the 'Agent' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonAgentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonAgentTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('Agent');
        $this->setPhpName('CommonAgent');
        $this->setClassname('CommonAgent');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('login', 'Login', 'VARCHAR', false, 255, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 100, '');
        $this->addColumn('mdp', 'Mdp', 'VARCHAR', true, 40, '');
        $this->addColumn('certificat', 'Certificat', 'LONGVARCHAR', false, null, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 100, '');
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', true, 100, '');
        $this->addColumn('tentatives_mdp', 'TentativesMdp', 'INTEGER', true, 1, 0);
        $this->addForeignKey('organisme', 'Organisme', 'VARCHAR', 'Organisme', 'acronyme', true, 30, '');
        $this->addColumn('service_id', 'ServiceId', 'INTEGER', true, null, 0);
        $this->addColumn('RECEVOIR_MAIL', 'RecevoirMail', 'CHAR', true, null, '0');
        $this->getColumn('RECEVOIR_MAIL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('elu', 'Elu', 'CHAR', true, null, '0');
        $this->addColumn('nom_fonction', 'NomFonction', 'VARCHAR', true, 100, '');
        $this->addColumn('num_tel', 'NumTel', 'VARCHAR', false, 20, null);
        $this->addColumn('num_fax', 'NumFax', 'VARCHAR', false, 20, null);
        $this->addColumn('type_comm', 'TypeComm', 'CHAR', true, null, '2');
        $this->addColumn('adr_postale', 'AdrPostale', 'VARCHAR', true, 255, '');
        $this->addColumn('civilite', 'Civilite', 'VARCHAR', true, 255, '');
        $this->addColumn('alerte_reponse_electronique', 'AlerteReponseElectronique', 'CHAR', true, null, '0');
        $this->getColumn('alerte_reponse_electronique', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('alerte_reception_mainlevee', 'AlerteReceptionMainlevee', 'CHAR', true, null, '0');
        $this->getColumn('alerte_reception_mainlevee', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('alerte_cloture_consultation', 'AlerteClotureConsultation', 'CHAR', true, null, '0');
        $this->getColumn('alerte_cloture_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('alerte_reception_message', 'AlerteReceptionMessage', 'CHAR', true, null, '0');
        $this->getColumn('alerte_reception_message', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('alerte_publication_boamp', 'AlertePublicationBoamp', 'CHAR', true, null, '0');
        $this->getColumn('alerte_publication_boamp', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('alerte_echec_publication_boamp', 'AlerteEchecPublicationBoamp', 'CHAR', true, null, '0');
        $this->getColumn('alerte_echec_publication_boamp', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('alerte_creation_modification_agent', 'AlerteCreationModificationAgent', 'CHAR', true, null, '0');
        $this->getColumn('alerte_creation_modification_agent', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', false, 20, null);
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', false, 20, null);
        $this->addColumn('id_initial', 'IdInitial', 'INTEGER', true, null, 0);
        $this->addColumn('id_profil_socle_externe', 'IdProfilSocleExterne', 'INTEGER', true, null, null);
        $this->addColumn('lieu_execution', 'LieuExecution', 'LONGVARCHAR', false, null, null);
        $this->addColumn('alerte_question_entreprise', 'AlerteQuestionEntreprise', 'CHAR', true, null, '0');
        $this->getColumn('alerte_question_entreprise', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('actif', 'Actif', 'CHAR', true, null, '1');
        $this->getColumn('actif', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('codes_nuts', 'CodesNuts', 'LONGVARCHAR', false, null, null);
        $this->addColumn('num_certificat', 'NumCertificat', 'VARCHAR', false, 64, '');
        $this->addColumn('alerte_validation_consultation', 'AlerteValidationConsultation', 'CHAR', true, null, '0');
        $this->getColumn('alerte_validation_consultation', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('alerte_chorus', 'AlerteChorus', 'CHAR', true, null, '0');
        $this->getColumn('alerte_chorus', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('password', 'Password', 'VARCHAR', true, 40, null);
        $this->addColumn('code_theme', 'CodeTheme', 'VARCHAR', false, 255, '0');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonOrganisme', 'CommonOrganisme', RelationMap::MANY_TO_ONE, array('organisme' => 'acronyme', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonDemandeAchatParCatalogue', 'CommonDemandeAchatParCatalogue', RelationMap::ONE_TO_MANY, array('id' => 'id_agent', ), null, null, 'CommonDemandeAchatParCatalogues');
        $this->addRelation('CommonExecAgentContrat', 'CommonExecAgentContrat', RelationMap::ONE_TO_MANY, array('id' => 'id_agent', ), null, null, 'CommonExecAgentContrats');
        $this->addRelation('CommonExecAvenantRelatedByIdAgentCrea', 'CommonExecAvenant', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecAvenantsRelatedByIdAgentCrea');
        $this->addRelation('CommonExecAvenantRelatedByIdAgentModif', 'CommonExecAvenant', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_modif', ), null, null, 'CommonExecAvenantsRelatedByIdAgentModif');
        $this->addRelation('CommonExecAvenantRelatedByIdAgentRejet', 'CommonExecAvenant', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_rejet', ), null, null, 'CommonExecAvenantsRelatedByIdAgentRejet');
        $this->addRelation('CommonExecAvenantRelatedByIdAgentValidation', 'CommonExecAvenant', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_validation', ), null, null, 'CommonExecAvenantsRelatedByIdAgentValidation');
        $this->addRelation('CommonExecContractantRelatedByIdAgentCrea', 'CommonExecContractant', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecContractantsRelatedByIdAgentCrea');
        $this->addRelation('CommonExecContractantRelatedByIdAgentModif', 'CommonExecContractant', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_modif', ), null, null, 'CommonExecContractantsRelatedByIdAgentModif');
        $this->addRelation('CommonExecContratRelatedByIdAgentCrea', 'CommonExecContrat', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecContratsRelatedByIdAgentCrea');
        $this->addRelation('CommonExecContratRelatedByIdAgentGestion', 'CommonExecContrat', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_gestion', ), null, null, 'CommonExecContratsRelatedByIdAgentGestion');
        $this->addRelation('CommonExecContratRelatedByIdAgentModif', 'CommonExecContrat', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_modif', ), null, null, 'CommonExecContratsRelatedByIdAgentModif');
        $this->addRelation('CommonExecDossierPaiement', 'CommonExecDossierPaiement', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_creat', ), null, null, 'CommonExecDossierPaiements');
        $this->addRelation('CommonExecEvenementRelatedByIdAgentCrea', 'CommonExecEvenement', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecEvenementsRelatedByIdAgentCrea');
        $this->addRelation('CommonExecEvenementRelatedByIdAgentModif', 'CommonExecEvenement', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_modif', ), null, null, 'CommonExecEvenementsRelatedByIdAgentModif');
        $this->addRelation('CommonExecEvenementRelatedByIdAgentRejet', 'CommonExecEvenement', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_rejet', ), null, null, 'CommonExecEvenementsRelatedByIdAgentRejet');
        $this->addRelation('CommonExecEvenementRelatedByIdAgentValidation', 'CommonExecEvenement', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_validation', ), null, null, 'CommonExecEvenementsRelatedByIdAgentValidation');
        $this->addRelation('CommonExecFactureRelatedByIdAgentCrea', 'CommonExecFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecFacturesRelatedByIdAgentCrea');
        $this->addRelation('CommonExecFactureRelatedByIdAgentModif', 'CommonExecFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_modif', ), null, null, 'CommonExecFacturesRelatedByIdAgentModif');
        $this->addRelation('CommonExecFactureRelatedByIdAgentRejet', 'CommonExecFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_rejet', ), null, null, 'CommonExecFacturesRelatedByIdAgentRejet');
        $this->addRelation('CommonExecFactureRelatedByIdAgentValidation', 'CommonExecFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_validation', ), null, null, 'CommonExecFacturesRelatedByIdAgentValidation');
        $this->addRelation('CommonExecHistoriquePrixRelatedByIdAgentCrea', 'CommonExecHistoriquePrix', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecHistoriquePrixsRelatedByIdAgentCrea');
        $this->addRelation('CommonExecHistoriquePrixRelatedByIdAgentModif', 'CommonExecHistoriquePrix', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_modif', ), null, null, 'CommonExecHistoriquePrixsRelatedByIdAgentModif');
        $this->addRelation('CommonExecLivrableContrat', 'CommonExecLivrableContrat', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecLivrableContrats');
        $this->addRelation('CommonExecPhaseRelatedByIdAgentCrea', 'CommonExecPhase', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecPhasesRelatedByIdAgentCrea');
        $this->addRelation('CommonExecPhaseRelatedByIdAgentModif', 'CommonExecPhase', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_modif', ), null, null, 'CommonExecPhasesRelatedByIdAgentModif');
        $this->addRelation('CommonExecPiece', 'CommonExecPiece', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecPieces');
        $this->addRelation('CommonExecPieceAvenant', 'CommonExecPieceAvenant', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecPieceAvenants');
        $this->addRelation('CommonExecPieceContrat', 'CommonExecPieceContrat', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecPieceContrats');
        $this->addRelation('CommonExecPieceDossierpaiement', 'CommonExecPieceDossierpaiement', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_creat', ), null, null, 'CommonExecPieceDossierpaiements');
        $this->addRelation('CommonExecPieceEvenement', 'CommonExecPieceEvenement', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecPieceEvenements');
        $this->addRelation('CommonExecPieceFacture', 'CommonExecPieceFacture', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecPieceFactures');
        $this->addRelation('CommonExecPrixRelatedByIdAgentCrea', 'CommonExecPrix', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecPrixsRelatedByIdAgentCrea');
        $this->addRelation('CommonExecPrixRelatedByIdAgentModif', 'CommonExecPrix', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_modif', ), null, null, 'CommonExecPrixsRelatedByIdAgentModif');
        $this->addRelation('CommonExecRepartitionRelatedByIdAgentCrea', 'CommonExecRepartition', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_crea', ), null, null, 'CommonExecRepartitionsRelatedByIdAgentCrea');
        $this->addRelation('CommonExecRepartitionRelatedByIdAgentModif', 'CommonExecRepartition', RelationMap::ONE_TO_MANY, array('id' => 'id_agent_modif', ), null, null, 'CommonExecRepartitionsRelatedByIdAgentModif');
        $this->addRelation('CommonResultatAnalyseHistorique', 'CommonResultatAnalyseHistorique', RelationMap::ONE_TO_MANY, array('id' => 'agent_id', ), 'CASCADE', 'CASCADE', 'CommonResultatAnalyseHistoriques');
        $this->addRelation('CommonTCAOCommissionAgent', 'CommonTCAOCommissionAgent', RelationMap::ONE_TO_MANY, array('id' => 'id_agent', ), null, null, 'CommonTCAOCommissionAgents');
        $this->addRelation('CommonTCAOSeanceAgent', 'CommonTCAOSeanceAgent', RelationMap::ONE_TO_MANY, array('id' => 'id_agent', ), null, null, 'CommonTCAOSeanceAgents');
        $this->addRelation('CommonTCAOSeanceInvite', 'CommonTCAOSeanceInvite', RelationMap::ONE_TO_MANY, array('id' => 'id_agent', ), null, null, 'CommonTCAOSeanceInvites');
    } // buildRelations()

} // CommonAgentTableMap
