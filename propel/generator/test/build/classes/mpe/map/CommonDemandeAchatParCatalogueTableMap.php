<?php



/**
 * This class defines the structure of the 'demande_achat_par_catalogue' table.
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
class CommonDemandeAchatParCatalogueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonDemandeAchatParCatalogueTableMap';

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
        $this->setName('demande_achat_par_catalogue');
        $this->setPhpName('CommonDemandeAchatParCatalogue');
        $this->setClassname('CommonDemandeAchatParCatalogue');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('reference', 'Reference', 'VARCHAR', true, 250, null);
        $this->addColumn('date_creation', 'DateCreation', 'DATE', true, null, null);
        $this->addColumn('date_validation', 'DateValidation', 'DATE', false, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, null, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonBonCommandeParCatalogue', 'CommonBonCommandeParCatalogue', RelationMap::ONE_TO_MANY, array('id' => 'id_demande', ), null, null, 'CommonBonCommandeParCatalogues');
    } // buildRelations()

} // CommonDemandeAchatParCatalogueTableMap
