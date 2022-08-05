<?php



/**
 * This class defines the structure of the 'nature_acte_juridique' table.
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
class CommonNatureActeJuridiqueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonNatureActeJuridiqueTableMap';

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
        $this->setName('nature_acte_juridique');
        $this->setPhpName('CommonNatureActeJuridique');
        $this->setClassname('CommonNatureActeJuridique');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, 0);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', false, 50, null);
        $this->addColumn('libelle_fr', 'LibelleFr', 'VARCHAR', false, 50, null);
        $this->addColumn('libelle_en', 'LibelleEn', 'VARCHAR', false, 50, null);
        $this->addColumn('libelle_es', 'LibelleEs', 'VARCHAR', false, 50, null);
        $this->addColumn('libelle_su', 'LibelleSu', 'VARCHAR', false, 50, null);
        $this->addColumn('libelle_du', 'LibelleDu', 'VARCHAR', false, 50, null);
        $this->addColumn('libelle_cz', 'LibelleCz', 'VARCHAR', false, 50, null);
        $this->addColumn('libelle_ar', 'LibelleAr', 'VARCHAR', false, 50, null);
        $this->addColumn('libelle_it', 'LibelleIt', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonNatureActeJuridiqueTableMap
