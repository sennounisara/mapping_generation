<?php



/**
 * This class defines the structure of the 'caution_restitution' table.
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
class CommonCautionRestitutionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonCautionRestitutionTableMap';

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
        $this->setName('caution_restitution');
        $this->setPhpName('CommonCautionRestitution');
        $this->setClassname('CommonCautionRestitution');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('ID_CAUTION_DEMANDE', 'IdCautionDemande', 'INTEGER', 'caution_demande', 'ID', true, null, null);
        $this->addColumn('ID_ENTREPRISE', 'IdEntreprise', 'INTEGER', true, null, null);
        $this->addColumn('ID_INSCRIT', 'IdInscrit', 'INTEGER', true, null, null);
        $this->addColumn('RAISON_SOCIALE', 'RaisonSociale', 'VARCHAR', false, 255, null);
        $this->addColumn('REF_CONSULTATION', 'RefConsultation', 'INTEGER', true, null, null);
        $this->addColumn('ACRONYME_ORG', 'AcronymeOrg', 'VARCHAR', true, 10, null);
        $this->addColumn('ID_ACHETEUR_SERVICE', 'IdAcheteurService', 'INTEGER', false, null, null);
        $this->addColumn('ID_STATUT', 'IdStatut', 'INTEGER', true, null, null);
        $this->addColumn('TYPE_ANNULATION', 'TypeAnnulation', 'CHAR', true, null, null);
        $this->getColumn('TYPE_ANNULATION', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        $this->addColumn('NUM_COMPTE_VIREMENT', 'NumCompteVirement', 'VARCHAR', false, 100, null);
        $this->addColumn('ID_BLOB_DEMANDE', 'IdBlobDemande', 'INTEGER', false, null, null);
        $this->addColumn('NOM_DOC_DEMANDE', 'NomDocDemande', 'VARCHAR', true, 250, null);
        $this->addColumn('ID_BLOB_MAINLEVEE', 'IdBlobMainlevee', 'INTEGER', false, null, null);
        $this->addColumn('NOM_DOC_MAINLEVEE', 'NomDocMainlevee', 'VARCHAR', false, 250, null);
        $this->addColumn('DATE_CREA', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_MODIF', 'DateModif', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_DEPOT', 'DateDepot', 'TIMESTAMP', false, null, null);
        $this->addColumn('MOTIF_REJET_ACHETEUR', 'MotifRejetAcheteur', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE', 'IdAgentAcheteurGenerationMainlevee', 'INTEGER', false, null, null);
        $this->addColumn('ID_AGENT_ACHETEUR_SIGNATAIRE', 'IdAgentAcheteurSignataire', 'INTEGER', false, null, null);
        $this->addColumn('ID_AGENT_ACHETEUR_VALIDATION', 'IdAgentAcheteurValidation', 'INTEGER', false, null, null);
        $this->addColumn('ID_AGENT_ACHETEUR_REJET', 'IdAgentAcheteurRejet', 'INTEGER', false, null, null);
        $this->addColumn('DATE_GENERATION_MAINLEVEE', 'DateGenerationMainlevee', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_SIGNATURE', 'DateSignature', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_VALIDATION_ACHETEUR', 'DateValidationAcheteur', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_REJET_ACHETEUR', 'DateRejetAcheteur', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_PRISE_EN_CHARGE_BANQUE', 'DatePriseEnChargeBanque', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_VALIDATION_BANQUE', 'DateValidationBanque', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_REJET_BANQUE', 'DateRejetBanque', 'TIMESTAMP', false, null, null);
        $this->addColumn('ID_AGENT_BANQUIER_PRISE_EN_CHARGE', 'IdAgentBanquierPriseEnCharge', 'INTEGER', false, null, null);
        $this->addColumn('ID_AGENT_BANQUIER_VALIDATION', 'IdAgentBanquierValidation', 'INTEGER', false, null, null);
        $this->addColumn('ID_AGENT_BANQUIER_REJET', 'IdAgentBanquierRejet', 'INTEGER', false, null, null);
        $this->addColumn('MOTIF_REJET_BANQUIER', 'MotifRejetBanquier', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_VILLE', 'IdVille', 'INTEGER', false, null, null);
        $this->addColumn('CODE_AGENCE', 'CodeAgence', 'VARCHAR', false, 11, null);
        $this->addColumn('CODE_VILLE', 'CodeVille', 'VARCHAR', false, 11, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonCautionDemande', 'CommonCautionDemande', RelationMap::MANY_TO_ONE, array('ID_CAUTION_DEMANDE' => 'ID', ), null, null);
    } // buildRelations()

} // CommonCautionRestitutionTableMap
