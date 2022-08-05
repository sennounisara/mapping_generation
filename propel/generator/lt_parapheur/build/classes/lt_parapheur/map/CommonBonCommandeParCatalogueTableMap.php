<?php



/**
 * This class defines the structure of the 'bon_commande_par_catalogue' table.
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
class CommonBonCommandeParCatalogueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonBonCommandeParCatalogueTableMap';

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
        $this->setName('bon_commande_par_catalogue');
        $this->setPhpName('CommonBonCommandeParCatalogue');
        $this->setClassname('CommonBonCommandeParCatalogue');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('reference', 'Reference', 'VARCHAR', true, 250, null);
        $this->addForeignKey('id_demande', 'IdDemande', 'INTEGER', 'demande_achat_par_catalogue', 'id', true, null, null);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', true, null, null);
        $this->addColumn('date_creation', 'DateCreation', 'DATE', true, null, null);
        $this->addColumn('date_validation', 'DateValidation', 'DATE', false, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonDemandeAchatParCatalogue', 'CommonDemandeAchatParCatalogue', RelationMap::MANY_TO_ONE, array('id_demande' => 'id', ), null, null);
    } // buildRelations()

} // CommonBonCommandeParCatalogueTableMap
