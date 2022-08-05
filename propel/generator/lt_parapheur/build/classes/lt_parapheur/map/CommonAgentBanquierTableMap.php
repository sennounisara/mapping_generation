<?php



/**
 * This class defines the structure of the 'agent_banquier' table.
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
class CommonAgentBanquierTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonAgentBanquierTableMap';

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
        $this->setName('agent_banquier');
        $this->setPhpName('CommonAgentBanquier');
        $this->setClassname('CommonAgentBanquier');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('username', 'Username', 'VARCHAR', true, 180, null);
        $this->addColumn('username_canonical', 'UsernameCanonical', 'VARCHAR', true, 180, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 180, null);
        $this->addColumn('email_canonical', 'EmailCanonical', 'VARCHAR', true, 180, null);
        $this->addColumn('enabled', 'Enabled', 'BOOLEAN', true, 1, null);
        $this->addColumn('salt', 'Salt', 'VARCHAR', false, 255, null);
        $this->addColumn('password', 'Password', 'VARCHAR', true, 255, null);
        $this->addColumn('last_login', 'LastLogin', 'TIMESTAMP', false, null, null);
        $this->addColumn('confirmation_token', 'ConfirmationToken', 'VARCHAR', false, 180, null);
        $this->addColumn('password_requested_at', 'PasswordRequestedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('roles', 'Roles', 'CLOB', true, null, null);
        $this->addColumn('id_banque', 'IdBanque', 'INTEGER', true, null, null);
        $this->addForeignKey('id_profil', 'IdProfil', 'INTEGER', 'caution_profil', 'id', true, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', true, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', true, null, null);
        $this->addColumn('code_ville', 'CodeVille', 'CLOB', false, null, null);
        $this->addColumn('code_agence', 'CodeAgence', 'CLOB', false, null, null);
        $this->addColumn('id_ref_ville', 'IdRefVille', 'INTEGER', false, null, 0);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 255, null);
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', true, 255, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', true, 255, null);
        $this->addColumn('deleted', 'Deleted', 'BOOLEAN', true, 1, false);
        $this->addColumn('notification', 'Notification', 'CHAR', true, null, '1');
        $this->getColumn('notification', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonCautionProfil', 'CommonCautionProfil', RelationMap::MANY_TO_ONE, array('id_profil' => 'id', ), null, null);
        $this->addRelation('CommonCautionDemandeRelatedByIdAgentBanquierRejet', 'CommonCautionDemande', RelationMap::ONE_TO_MANY, array('id' => 'ID_AGENT_BANQUIER_REJET', ), null, null, 'CommonCautionDemandesRelatedByIdAgentBanquierRejet');
        $this->addRelation('CommonCautionDemandeRelatedByIdAgentBanquierValidation', 'CommonCautionDemande', RelationMap::ONE_TO_MANY, array('id' => 'ID_AGENT_BANQUIER_VALIDATION', ), null, null, 'CommonCautionDemandesRelatedByIdAgentBanquierValidation');
        $this->addRelation('CommonCautionDemandeRelatedByIdAgentPriseEnCharge', 'CommonCautionDemande', RelationMap::ONE_TO_MANY, array('id' => 'ID_AGENT_PRISE_EN_CHARGE', ), null, null, 'CommonCautionDemandesRelatedByIdAgentPriseEnCharge');
        $this->addRelation('CommonCautionDemandeRelatedByIdSignataire1', 'CommonCautionDemande', RelationMap::ONE_TO_MANY, array('id' => 'ID_SIGNATAIRE1', ), null, null, 'CommonCautionDemandesRelatedByIdSignataire1');
        $this->addRelation('CommonCautionDemandeRelatedByIdSignataire2', 'CommonCautionDemande', RelationMap::ONE_TO_MANY, array('id' => 'ID_SIGNATAIRE2', ), null, null, 'CommonCautionDemandesRelatedByIdSignataire2');
        $this->addRelation('CommonCautionSignataireDemande', 'CommonCautionSignataireDemande', RelationMap::ONE_TO_MANY, array('id' => 'id_signataire', ), null, null, 'CommonCautionSignataireDemandes');
    } // buildRelations()

} // CommonAgentBanquierTableMap
