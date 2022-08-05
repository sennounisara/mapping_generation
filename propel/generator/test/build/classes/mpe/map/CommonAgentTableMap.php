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
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, '');
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
        $this->addColumn('tentative_recup_mdp', 'TentativeRecupMdp', 'INTEGER', true, null, null);
        $this->addColumn('date_tentative_recup_mdp', 'DateTentativeRecupMdp', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAgentTableMap
