<?php



/**
 * This class defines the structure of the 'CategorieINSEE' table.
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
class CommonCategorieINSEETableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonCategorieINSEETableMap';

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
        $this->setName('CategorieINSEE');
        $this->setPhpName('CommonCategorieINSEE');
        $this->setClassname('CommonCategorieINSEE');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id', 'Id', 'VARCHAR', true, 20, '');
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 100, '');
        $this->addColumn('libelle_fr', 'LibelleFr', 'VARCHAR', true, 100, '');
        $this->addColumn('libelle_en', 'LibelleEn', 'VARCHAR', true, 100, '');
        $this->addColumn('libelle_es', 'LibelleEs', 'VARCHAR', true, 100, '');
        $this->addColumn('libelle_su', 'LibelleSu', 'VARCHAR', true, 100, '');
        $this->addColumn('libelle_du', 'LibelleDu', 'VARCHAR', true, 100, '');
        $this->addColumn('libelle_cz', 'LibelleCz', 'VARCHAR', true, 100, '');
        $this->addColumn('libelle_ar', 'LibelleAr', 'VARCHAR', true, 100, '');
        $this->addColumn('libelle_it', 'LibelleIt', 'VARCHAR', true, 100, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCategorieINSEETableMap
