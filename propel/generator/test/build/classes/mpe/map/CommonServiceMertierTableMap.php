<?php



/**
 * This class defines the structure of the 'Service_Mertier' table.
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
class CommonServiceMertierTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonServiceMertierTableMap';

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
        $this->setName('Service_Mertier');
        $this->setPhpName('CommonServiceMertier');
        $this->setClassname('CommonServiceMertier');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, 0);
        $this->addColumn('sigle', 'Sigle', 'VARCHAR', false, 50, null);
        $this->addColumn('denomination', 'Denomination', 'VARCHAR', false, 255, null);
        $this->addColumn('url_acces', 'UrlAcces', 'LONGVARCHAR', false, null, null);
        $this->addColumn('logo', 'Logo', 'VARCHAR', true, 100, '');
        $this->addColumn('url_deconnexion', 'UrlDeconnexion', 'LONGVARCHAR', true, null, null);
        $this->addColumn('ordre', 'Ordre', 'INTEGER', true, 2, 0);
        $this->addColumn('couleur', 'Couleur', 'VARCHAR', false, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonServiceMertierTableMap
