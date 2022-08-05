<?php



/**
 * This class defines the structure of the 't_check_list_etape' table.
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
class TCheckListEtapeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TCheckListEtapeTableMap';

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
        $this->setName('t_check_list_etape');
        $this->setPhpName('TCheckListEtape');
        $this->setClassname('TCheckListEtape');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_ETAPE_CIRCUIT', 'IdEtapeCircuit', 'INTEGER', true, null, null);
        $this->addColumn('LIBELLE_FR', 'LibelleFr', 'VARCHAR', false, 255, null);
        $this->addColumn('LIBELLE_AR', 'LibelleAr', 'VARCHAR', false, 255, null);
        $this->addColumn('TYPE_CL', 'TypeCl', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TCheckListEtapeTableMap
