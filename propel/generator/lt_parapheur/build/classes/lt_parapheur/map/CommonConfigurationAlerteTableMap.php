<?php



/**
 * This class defines the structure of the 'configuration_alerte' table.
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
class CommonConfigurationAlerteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonConfigurationAlerteTableMap';

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
        $this->setName('configuration_alerte');
        $this->setPhpName('CommonConfigurationAlerte');
        $this->setClassname('CommonConfigurationAlerte');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', false, 255, null);
        $this->addColumn('operation', 'Operation', 'VARCHAR', false, 255, null);
        $this->addColumn('bloquant', 'Bloquant', 'CHAR', false, null, '0');
        $this->getColumn('bloquant', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('active', 'Active', 'CHAR', false, null, null);
        $this->getColumn('active', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('xml', 'Xml', 'CLOB', false, null, null);
        $this->addColumn('message', 'Message', 'CLOB', false, null, null);
        $this->addColumn('type_objet', 'TypeObjet', 'VARCHAR', false, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonConfigurationAlerteTableMap
