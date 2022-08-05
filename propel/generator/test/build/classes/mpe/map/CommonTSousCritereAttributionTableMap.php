<?php



/**
 * This class defines the structure of the 't_sous_critere_attribution' table.
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
class CommonTSousCritereAttributionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTSousCritereAttributionTableMap';

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
        $this->setName('t_sous_critere_attribution');
        $this->setPhpName('CommonTSousCritereAttribution');
        $this->setClassname('CommonTSousCritereAttribution');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_sous_critere_attribution', 'IdSousCritereAttribution', 'INTEGER', true, 50, null);
        $this->addColumn('enonce', 'Enonce', 'VARCHAR', false, 50, null);
        $this->addColumn('ponderation', 'Ponderation', 'DECIMAL', false, 5, 0);
        $this->addColumn('id_critere_attribution', 'IdCritereAttribution', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTSousCritereAttributionTableMap
