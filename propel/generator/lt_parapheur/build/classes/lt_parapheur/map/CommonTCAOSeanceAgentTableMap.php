<?php



/**
 * This class defines the structure of the 't_CAO_Seance_Agent' table.
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
class CommonTCAOSeanceAgentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTCAOSeanceAgentTableMap';

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
        $this->setName('t_CAO_Seance_Agent');
        $this->setPhpName('CommonTCAOSeanceAgent');
        $this->setClassname('CommonTCAOSeanceAgent');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_seance_agent', 'IdSeanceAgent', 'BIGINT', true, null, null);
        $this->addColumn('id_seance', 'IdSeance', 'BIGINT', true, null, null);
        $this->addColumn('id_agent', 'IdAgent', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('id_ref_val_type_voix', 'IdRefValTypeVoix', 'INTEGER', true, null, null);
        $this->addColumn('type_compte', 'TypeCompte', 'TINYINT', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTCAOSeanceAgentTableMap
