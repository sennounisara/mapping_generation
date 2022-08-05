<?php



/**
 * This class defines the structure of the 'offre_caution' table.
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
class CommonOffreCautionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonOffreCautionTableMap';

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
        $this->setName('offre_caution');
        $this->setPhpName('CommonOffreCaution');
        $this->setClassname('CommonOffreCaution');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, null, null);
        $this->addColumn('REF_CONSULTATION', 'RefConsultation', 'INTEGER', true, null, null);
        $this->addColumn('ID_OFFRE', 'IdOffre', 'INTEGER', true, null, null);
        $this->addColumn('TYPE_ENV', 'TypeEnv', 'INTEGER', true, null, null);
        $this->addColumn('ID_ENTREPRISE', 'IdEntreprise', 'INTEGER', true, null, null);
        $this->addColumn('ID_INSCRIT', 'IdInscrit', 'INTEGER', true, null, null);
        $this->addColumn('ACRONYME', 'Acronyme', 'VARCHAR', true, 10, null);
        $this->addColumn('INTITULE', 'Intitule', 'VARCHAR', true, 100, null);
        $this->addColumn('LOT', 'Lot', 'INTEGER', false, null, null);
        $this->addColumn('OBJET_LOT', 'ObjetLot', 'VARCHAR', false, 250, null);
        $this->addColumn('RAISON_SOCIALE', 'RaisonSociale', 'VARCHAR', true, 100, null);
        $this->addColumn('MONTANT', 'Montant', 'FLOAT', true, null, null);
        $this->addColumn('DATE_DEMANDE', 'DateDemande', 'TIMESTAMP', false, null, null);
        $this->addColumn('ID_STATUT_CAUTION', 'IdStatutCaution', 'INTEGER', true, null, null);
        $this->addColumn('ID_COMPTE_BANCAIRE', 'IdCompteBancaire', 'INTEGER', true, null, null);
        $this->addColumn('ID_BLOB_DEMANDE', 'IdBlobDemande', 'INTEGER', false, null, null);
        $this->addColumn('NOM_DOC_DEMANDE', 'NomDocDemande', 'VARCHAR', true, 250, null);
        $this->addColumn('ID_BLOB_CAUTION', 'IdBlobCaution', 'INTEGER', false, null, null);
        $this->addColumn('NOM_DOC_CAUTION', 'NomDocCaution', 'VARCHAR', false, 250, null);
        $this->addColumn('ID_INSCRIT_CREA', 'IdInscritCrea', 'INTEGER', false, null, null);
        $this->addColumn('DATE_CREA', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addColumn('IDENTIFIANT_BANCAIRE', 'IdentifiantBancaire', 'VARCHAR', true, 100, null);
        $this->addColumn('ACHETEUR_PUBLIC', 'AcheteurPublic', 'VARCHAR', true, 200, null);
        $this->addColumn('DATE_VALIDATION', 'DateValidation', 'TIMESTAMP', false, null, null);
        $this->addColumn('DEPOT_ANNULE', 'DepotAnnule', 'CHAR', true, null, '0');
        $this->getColumn('DEPOT_ANNULE', false)->setValueSet(array (
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
    } // buildRelations()

} // CommonOffreCautionTableMap
