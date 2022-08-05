<?php



/**
 * This class defines the structure of the 'agent' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class AgentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.AgentTableMap';

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
        $this->setName('agent');
        $this->setPhpName('Agent');
        $this->setClassname('Agent');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', false, null, null);
        $this->addColumn('ID_COMMUNE', 'IdCommune', 'INTEGER', false, null, null);
        $this->addColumn('ID_PROFIL_AGENT', 'IdProfilAgent', 'INTEGER', true, null, null);
        $this->addColumn('LOGIN_AGENT', 'LoginAgent', 'VARCHAR', false, 255, null);
        $this->addColumn('MOT_DE_PASSE_AGENT', 'MotDePasseAgent', 'VARCHAR', false, 255, null);
        $this->addColumn('SALT_AGENT', 'SaltAgent', 'VARCHAR', false, 50, null);
        $this->addColumn('NOM_AGENT_FR', 'NomAgentFr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_FR', 'PrenomAgentFr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_AGENT_AR', 'NomAgentAr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_AR', 'PrenomAgentAr', 'VARCHAR', false, 255, null);
        $this->addColumn('EMAIL_AGENT', 'EmailAgent', 'VARCHAR', false, 255, null);
        $this->addColumn('TEL_AGENT', 'TelAgent', 'VARCHAR', false, 255, null);
        $this->addColumn('FAX_AGENT', 'FaxAgent', 'VARCHAR', false, 255, null);
        $this->addColumn('ETAT_AGENT', 'EtatAgent', 'CHAR', false, null, null);
        $this->getColumn('ETAT_AGENT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('SUPER_AGENT', 'SuperAgent', 'CHAR', false, null, null);
        $this->getColumn('SUPER_AGENT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ETAT_ALERTE', 'EtatAlerte', 'CHAR', false, null, '0');
        $this->getColumn('ETAT_ALERTE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('TYPE_ALERTE', 'TypeAlerte', 'CHAR', false, null, '0');
        $this->getColumn('TYPE_ALERTE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('SIGNATAIRE', 'Signataire', 'CHAR', true, null, '0');
        $this->getColumn('SIGNATAIRE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_DERNIER_ACCES', 'DateDernierAcces', 'TIMESTAMP', false, null, null);
        $this->addColumn('ID_SOCLE', 'IdSocle', 'INTEGER', false, null, null);
        $this->addColumn('CENTRE_APPEL', 'CentreAppel', 'CHAR', false, null, '0');
        $this->getColumn('CENTRE_APPEL', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('IDENTIFIANT_AGENT_CA', 'IdentifiantAgentCa', 'VARCHAR', false, 255, null);
        $this->addColumn('TYPE_AFFECTATION', 'TypeAffectation', 'CHAR', true, null, '0');
        $this->getColumn('TYPE_AFFECTATION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ID_PJ_SIGNATURE', 'IdPjSignature', 'INTEGER', false, null, null);
        $this->addColumn('ID_PJ_SIGNATURE_PARAPHE', 'IdPjSignatureParaphe', 'INTEGER', false, null, null);
        $this->addColumn('CERTIFICAT', 'Certificat', 'LONGVARCHAR', false, null, null);
        $this->addColumn('IDENTIFIANT_CERTIFICAT', 'IdentifiantCertificat', 'VARCHAR', false, 10, null);
        $this->addColumn('JETON_VALIDATION', 'JetonValidation', 'VARCHAR', false, 100, null);
        $this->addColumn('FILIGRANE', 'Filigrane', 'CHAR', false, null, '0');
        $this->getColumn('FILIGRANE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ID_VERSION', 'IdVersion', 'INTEGER', false, null, null);
        $this->addColumn('VERSION_LU', 'VersionLu', 'CHAR', true, null, '0');
        $this->getColumn('VERSION_LU', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('TENTATIVE_MDP', 'TentativeMdp', 'INTEGER', false, null, null);
        $this->addColumn('DATE_BLOCAGE', 'DateBlocage', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('TAgentTicket', 'TAgentTicket', RelationMap::ONE_TO_MANY, array('ID' => 'ID_AGENT', ), null, null, 'TAgentTickets');
        $this->addRelation('TChatbot', 'TChatbot', RelationMap::ONE_TO_MANY, array('ID' => 'AGENT_ID', ), null, null, 'TChatbots');
        $this->addRelation('THistoriqueConsultation', 'THistoriqueConsultation', RelationMap::ONE_TO_MANY, array('ID' => 'ID_AGENT', ), null, null, 'THistoriqueConsultations');
    } // buildRelations()

} // AgentTableMap
