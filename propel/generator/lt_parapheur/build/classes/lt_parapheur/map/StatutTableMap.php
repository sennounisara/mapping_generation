<?php



/**
 * This class defines the structure of the 'statut' table.
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
class StatutTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.StatutTableMap';

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
        $this->setName('statut');
        $this->setPhpName('Statut');
        $this->setClassname('Statut');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_STATUT', 'IdStatut', 'INTEGER', true, null, null);
        $this->addColumn('LIBELE_STATUT_FR', 'LibeleStatutFr', 'VARCHAR', false, 255, null);
        $this->addColumn('LIBELE_STATUT_AR', 'LibeleStatutAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_ACTION', 'IdAction', 'INTEGER', false, null, null);
        $this->addColumn('IS_ECHANGE', 'IsEchange', 'CHAR', false, null, null);
        $this->getColumn('IS_ECHANGE', false)->setValueSet(array (
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

} // StatutTableMap
