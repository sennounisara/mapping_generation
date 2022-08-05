<?php



/**
 * This class defines the structure of the 'SousCategorie' table.
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
class CommonSousCategorieTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonSousCategorieTableMap';

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
        $this->setName('SousCategorie');
        $this->setPhpName('CommonSousCategorie');
        $this->setClassname('CommonSousCategorie');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id', 'Id', 'VARCHAR', true, 30, '');
        $this->addColumn('id_categorie', 'IdCategorie', 'VARCHAR', true, 50, '');
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 250, null);
        $this->addColumn('libelle_ar', 'LibelleAr', 'VARCHAR', false, 250, null);
        $this->addColumn('libelle_fr', 'LibelleFr', 'VARCHAR', false, 250, null);
        $this->addColumn('libelle_en', 'LibelleEn', 'VARCHAR', false, 250, null);
        $this->addColumn('libelle_es', 'LibelleEs', 'VARCHAR', false, 250, null);
        $this->addColumn('libelle_su', 'LibelleSu', 'VARCHAR', false, 250, null);
        $this->addColumn('libelle_du', 'LibelleDu', 'VARCHAR', false, 250, null);
        $this->addColumn('libelle_cz', 'LibelleCz', 'VARCHAR', false, 250, null);
        $this->addColumn('libelle_it', 'LibelleIt', 'VARCHAR', false, 250, null);
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', false, 20, null);
        $this->addColumn('code', 'Code', 'VARCHAR', false, 10, null);
        $this->addColumn('active', 'Active', 'CHAR', true, null, '1');
        $this->getColumn('active', false)->setValueSet(array (
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

} // CommonSousCategorieTableMap
