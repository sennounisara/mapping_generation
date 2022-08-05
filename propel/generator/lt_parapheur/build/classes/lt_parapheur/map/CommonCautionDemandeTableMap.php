<?php



/**
 * This class defines the structure of the 'caution_demande' table.
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
class CommonCautionDemandeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonCautionDemandeTableMap';

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
        $this->setName('caution_demande');
        $this->setPhpName('CommonCautionDemande');
        $this->setClassname('CommonCautionDemande');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('REF_CONSULTATION', 'RefConsultation', 'INTEGER', true, null, null);
        $this->addColumn('ID_ENTREPRISE', 'IdEntreprise', 'INTEGER', true, null, null);
        $this->addColumn('ID_INSCRIT', 'IdInscrit', 'INTEGER', true, null, null);
        $this->addColumn('ACRONYME', 'Acronyme', 'VARCHAR', true, 10, null);
        $this->addColumn('INTITULE', 'Intitule', 'VARCHAR', true, 100, null);
        $this->addColumn('LOT', 'Lot', 'INTEGER', false, null, null);
        $this->addColumn('OBJET_LOT', 'ObjetLot', 'VARCHAR', false, 250, null);
        $this->addColumn('RAISON_SOCIALE', 'RaisonSociale', 'VARCHAR', true, 100, null);
        $this->addColumn('MONTANT', 'Montant', 'DOUBLE', true, null, null);
        $this->addColumn('DATE_DEMANDE', 'DateDemande', 'TIMESTAMP', true, null, null);
        $this->addColumn('DATE_LIMITE_REMISE_PLIS', 'DateLimiteRemisePlis', 'TIMESTAMP', true, null, null);
        $this->addColumn('ID_STATUT_CAUTION', 'IdStatutCaution', 'INTEGER', true, null, null);
        $this->addForeignKey('ID_COMPTE_BANCAIRE', 'IdCompteBancaire', 'INTEGER', 't_compte_bancaire', 'ID', true, null, null);
        $this->addColumn('ID_BLOB_DEMANDE', 'IdBlobDemande', 'INTEGER', false, null, null);
        $this->addColumn('NOM_DOC_DEMANDE', 'NomDocDemande', 'VARCHAR', true, 250, null);
        $this->addColumn('ID_BLOB_CAUTION', 'IdBlobCaution', 'INTEGER', false, null, null);
        $this->addColumn('NOM_DOC_CAUTION', 'NomDocCaution', 'VARCHAR', false, 250, null);
        $this->addColumn('ID_INSCRIT_CREA', 'IdInscritCrea', 'INTEGER', false, null, null);
        $this->addColumn('DATE_CREA', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addColumn('ID_INSCRIT_MODIF', 'IdInscritModif', 'INTEGER', false, null, null);
        $this->addColumn('DATE_MODIF', 'DateModif', 'TIMESTAMP', false, null, null);
        $this->addColumn('IDENTIFIANT_BANCAIRE', 'IdentifiantBancaire', 'VARCHAR', true, 100, null);
        $this->addColumn('ID_VILLE', 'IdVille', 'INTEGER', true, null, null);
        $this->addColumn('ACHETEUR_PUBLIC', 'AcheteurPublic', 'VARCHAR', true, 200, null);
        $this->addColumn('DATE_VALIDATION', 'DateValidation', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_REJET', 'DateRejet', 'TIMESTAMP', false, null, null);
        $this->addColumn('MOTIF_REJET', 'MotifRejet', 'VARCHAR', false, 255, null);
        $this->addForeignKey('ID_AGENT_BANQUIER_VALIDATION', 'IdAgentBanquierValidation', 'INTEGER', 'agent_banquier', 'id', false, null, null);
        $this->addForeignKey('ID_AGENT_BANQUIER_REJET', 'IdAgentBanquierRejet', 'INTEGER', 'agent_banquier', 'id', false, null, null);
        $this->addColumn('REFERENCE_MODELE', 'ReferenceModele', 'VARCHAR', false, 255, null);
        $this->addColumn('DATE_PRISE_EN_CHARGE', 'DatePriseEnCharge', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('ID_AGENT_PRISE_EN_CHARGE', 'IdAgentPriseEnCharge', 'INTEGER', 'agent_banquier', 'id', false, null, null);
        $this->addColumn('TAGUEE', 'Taguee', 'CHAR', true, null, '0');
        $this->getColumn('TAGUEE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('UTILISEE', 'Utilisee', 'CHAR', true, null, '0');
        $this->getColumn('UTILISEE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MISE_A_DISPO', 'MiseADispo', 'CHAR', true, null, '0');
        $this->getColumn('MISE_A_DISPO', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addForeignKey('ID_SIGNATAIRE1', 'IdSignataire1', 'INTEGER', 'agent_banquier', 'id', false, null, null);
        $this->addColumn('DATE_SIGNATURE1', 'DateSignature1', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('ID_SIGNATAIRE2', 'IdSignataire2', 'INTEGER', 'agent_banquier', 'id', false, null, null);
        $this->addColumn('DATE_SIGNATURE2', 'DateSignature2', 'TIMESTAMP', false, null, null);
        $this->addColumn('GROUPEMENT', 'Groupement', 'CHAR', true, null, '0');
        $this->getColumn('GROUPEMENT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ID_GROUPEMENT', 'IdGroupement', 'INTEGER', false, null, null);
        $this->addColumn('CODE_AGENCE', 'CodeAgence', 'VARCHAR', false, 11, null);
        $this->addColumn('CODE_VILLE', 'CodeVille', 'VARCHAR', false, 11, null);
        $this->addColumn('REFERENCE_INTERNE', 'ReferenceInterne', 'INTEGER', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonAgentBanquierRelatedByIdAgentBanquierRejet', 'CommonAgentBanquier', RelationMap::MANY_TO_ONE, array('ID_AGENT_BANQUIER_REJET' => 'id', ), null, null);
        $this->addRelation('CommonAgentBanquierRelatedByIdAgentBanquierValidation', 'CommonAgentBanquier', RelationMap::MANY_TO_ONE, array('ID_AGENT_BANQUIER_VALIDATION' => 'id', ), null, null);
        $this->addRelation('CommonAgentBanquierRelatedByIdAgentPriseEnCharge', 'CommonAgentBanquier', RelationMap::MANY_TO_ONE, array('ID_AGENT_PRISE_EN_CHARGE' => 'id', ), null, null);
        $this->addRelation('CommonTCompteBancaire', 'CommonTCompteBancaire', RelationMap::MANY_TO_ONE, array('ID_COMPTE_BANCAIRE' => 'ID', ), null, null);
        $this->addRelation('CommonAgentBanquierRelatedByIdSignataire1', 'CommonAgentBanquier', RelationMap::MANY_TO_ONE, array('ID_SIGNATAIRE1' => 'id', ), null, null);
        $this->addRelation('CommonAgentBanquierRelatedByIdSignataire2', 'CommonAgentBanquier', RelationMap::MANY_TO_ONE, array('ID_SIGNATAIRE2' => 'id', ), null, null);
        $this->addRelation('CommonCautionRestitution', 'CommonCautionRestitution', RelationMap::ONE_TO_MANY, array('ID' => 'ID_CAUTION_DEMANDE', ), null, null, 'CommonCautionRestitutions');
        $this->addRelation('CommonCautionSignataireDemande', 'CommonCautionSignataireDemande', RelationMap::ONE_TO_MANY, array('ID' => 'id_demande', ), null, null, 'CommonCautionSignataireDemandes');
    } // buildRelations()

} // CommonCautionDemandeTableMap
