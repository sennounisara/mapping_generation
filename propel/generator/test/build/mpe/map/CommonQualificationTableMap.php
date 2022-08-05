<?php



/**
 * This class defines the structure of the 'Qualification' table.
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
class CommonQualificationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonQualificationTableMap';

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
        $this->setName('Qualification');
        $this->setPhpName('CommonQualification');
        $this->setClassname('CommonQualification');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_interne', 'IdInterne', 'VARCHAR', true, 20, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', false, 255, null);
        $this->addColumn('id_interne_parent', 'IdInterneParent', 'VARCHAR', false, 20, null);
        $this->addColumn('libelle_ar', 'LibelleAr', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_fr', 'LibelleFr', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_en', 'LibelleEn', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_es', 'LibelleEs', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_su', 'LibelleSu', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_du', 'LibelleDu', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_cz', 'LibelleCz', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_it', 'LibelleIt', 'VARCHAR', false, 255, '');
        $this->addColumn('active', 'Active', 'INTEGER', false, null, 1);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonQualificationTableMap
