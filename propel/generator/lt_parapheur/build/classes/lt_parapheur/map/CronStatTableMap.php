<?php



/**
 * This class defines the structure of the 'cron_stat' table.
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
class CronStatTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CronStatTableMap';

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
        $this->setName('cron_stat');
        $this->setPhpName('CronStat');
        $this->setClassname('CronStat');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_CRON', 'IdCron', 'INTEGER', true, null, null);
        $this->addColumn('DERNIERE_DATE_LANCEMENT', 'DerniereDateLancement', 'TIMESTAMP', false, null, null);
        $this->addColumn('TYPE', 'Type', 'CHAR', true, null, null);
        $this->getColumn('TYPE', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '4',
  3 => '5',
  4 => '6',
));
        $this->addColumn('STATUT', 'Statut', 'CHAR', true, null, null);
        $this->getColumn('STATUT', false)->setValueSet(array (
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

} // CronStatTableMap
