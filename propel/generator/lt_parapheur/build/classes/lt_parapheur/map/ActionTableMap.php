<?php



/**
 * This class defines the structure of the 'action' table.
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
class ActionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.ActionTableMap';

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
        $this->setName('action');
        $this->setPhpName('Action');
        $this->setClassname('Action');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_ACTION', 'IdAction', 'INTEGER', true, null, null);
        $this->addColumn('LIBELLE_ACTION_FR', 'LibelleActionFr', 'VARCHAR', false, 255, null);
        $this->addColumn('LIBELLE_ACTION_AR', 'LibelleActionAr', 'VARCHAR', false, 255, null);
        $this->addColumn('CONDITIONS_VISIBILITE', 'ConditionsVisibilite', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ActionTableMap
