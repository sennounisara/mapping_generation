<?php



/**
 * This class defines the structure of the 'article_catalogue' table.
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
class CommonArticleCatalogueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonArticleCatalogueTableMap';

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
        $this->setName('article_catalogue');
        $this->setPhpName('CommonArticleCatalogue');
        $this->setClassname('CommonArticleCatalogue');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('reference', 'Reference', 'VARCHAR', true, 40, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 250, null);
        $this->addColumn('prix_unitaire', 'PrixUnitaire', 'DOUBLE', true, null, null);
        $this->addColumn('delai_livraison', 'DelaiLivraison', 'INTEGER', true, null, null);
        $this->addColumn('type_categorie', 'TypeCategorie', 'INTEGER', true, null, null);
        $this->addColumn('id_marque', 'IdMarque', 'INTEGER', true, null, null);
        $this->addColumn('id_fabriquant', 'IdFabriquant', 'INTEGER', true, null, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', true, null, null);
        $this->addColumn('unite_delai_livraison', 'UniteDelaiLivraison', 'INTEGER', true, null, null);
        $this->addColumn('id_catalogue', 'IdCatalogue', 'INTEGER', true, null, null);
        $this->addColumn('actif', 'Actif', 'BOOLEAN', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonArticleCatalogueTableMap
