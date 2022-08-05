<?php



/**
 * This class defines the structure of the 'facture' table.
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
class CommonFactureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonFactureTableMap';

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
        $this->setName('facture');
        $this->setPhpName('CommonFacture');
        $this->setClassname('CommonFacture');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_type', 'IdType', 'INTEGER', 'type_facture', 'id', true, null, null);
        $this->addForeignKey('id_sous_type', 'IdSousType', 'INTEGER', 'sous_type_facture', 'id', true, null, null);
        $this->addColumn('type', 'Type', 'VARCHAR', false, 255, null);
        $this->addColumn('ref', 'Ref', 'VARCHAR', false, 255, null);
        $this->addColumn('date_creation', 'DateCreation', 'TIMESTAMP', true, null, null);
        $this->addColumn('montant_ht', 'MontantHt', 'DOUBLE', false, null, null);
        $this->addColumn('montant_ttc', 'MontantTtc', 'DOUBLE', false, null, null);
        $this->addColumn('montant_tva', 'MontantTva', 'DOUBLE', false, null, null);
        $this->addColumn('objet', 'Objet', 'VARCHAR', false, 255, null);
        $this->addColumn('devis', 'Devis', 'VARCHAR', false, 255, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', false, null, null);
        $this->addColumn('numero_depot', 'NumeroDepot', 'VARCHAR', false, 255, null);
        $this->addColumn('numero_marche', 'NumeroMarche', 'VARCHAR', false, 255, null);
        $this->addColumn('id_inscrit', 'IdInscrit', 'INTEGER', true, null, null);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', true, null, null);
        $this->addColumn('id_blob_facture', 'IdBlobFacture', 'INTEGER', true, null, null);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', false, 255, null);
        $this->addColumn('id_blob_facture_signe', 'IdBlobFactureSigne', 'INTEGER', false, null, null);
        $this->addColumn('date_envoi', 'DateEnvoi', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_depot', 'DateDepot', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTypeFacture', 'CommonTypeFacture', RelationMap::MANY_TO_ONE, array('id_type' => 'id', ), null, null);
        $this->addRelation('CommonSousTypeFacture', 'CommonSousTypeFacture', RelationMap::MANY_TO_ONE, array('id_sous_type' => 'id', ), null, null);
    } // buildRelations()

} // CommonFactureTableMap
