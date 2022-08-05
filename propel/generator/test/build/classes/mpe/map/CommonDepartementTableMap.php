<?php



/**
 * This class defines the structure of the 'Departement' table.
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
class CommonDepartementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonDepartementTableMap';

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
        $this->setName('Departement');
        $this->setPhpName('CommonDepartement');
        $this->setClassname('CommonDepartement');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_departement', 'IdDepartement', 'INTEGER', true, null, null);
        $this->addColumn('nom_departement', 'NomDepartement', 'VARCHAR', true, 100, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonDepartementTableMap
