<?php



/**
 * This class defines the structure of the 'CompteMoniteur' table.
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
class CommonCompteMoniteurTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonCompteMoniteurTableMap';

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
        $this->setName('CompteMoniteur');
        $this->setPhpName('CommonCompteMoniteur');
        $this->setClassname('CommonCompteMoniteur');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 22, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('moniteur_login', 'MoniteurLogin', 'VARCHAR', true, 100, '');
        $this->addColumn('moniteur_password', 'MoniteurPassword', 'VARCHAR', true, 100, '');
        $this->addColumn('moniteur_mail', 'MoniteurMail', 'VARCHAR', true, 100, '');
        $this->addColumn('moniteur_target', 'MoniteurTarget', 'CHAR', true, null, '0');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCompteMoniteurTableMap
