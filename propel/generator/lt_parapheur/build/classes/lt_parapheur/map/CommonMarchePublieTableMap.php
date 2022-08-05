<?php



/**
 * This class defines the structure of the 'MarchePublie' table.
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
class CommonMarchePublieTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonMarchePublieTableMap';

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
        $this->setName('MarchePublie');
        $this->setPhpName('CommonMarchePublie');
        $this->setClassname('CommonMarchePublie');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('numeroMarcheAnnee', 'Numeromarcheannee', 'INTEGER', false, null, 0);
        $this->addColumn('idService', 'Idservice', 'INTEGER', false, null, 0);
        $this->addColumn('isPubliee', 'Ispubliee', 'CHAR', true, null, '0');
        $this->getColumn('isPubliee', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('isImportee', 'Isimportee', 'CHAR', true, null, '0');
        $this->getColumn('isImportee', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('newVersion', 'Newversion', 'CHAR', true, null, '0');
        $this->getColumn('newVersion', false)->setValueSet(array (
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

} // CommonMarchePublieTableMap
