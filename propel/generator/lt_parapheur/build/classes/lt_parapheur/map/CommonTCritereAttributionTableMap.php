<?php



/**
 * This class defines the structure of the 't_critere_attribution' table.
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
class CommonTCritereAttributionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTCritereAttributionTableMap';

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
        $this->setName('t_critere_attribution');
        $this->setPhpName('CommonTCritereAttribution');
        $this->setClassname('CommonTCritereAttribution');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_critere_attribution', 'IdCritereAttribution', 'INTEGER', true, null, null);
        $this->addColumn('enonce', 'Enonce', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ordre', 'Ordre', 'INTEGER', true, null, 0);
        $this->addColumn('ponderation', 'Ponderation', 'DECIMAL', false, 5, 0);
        $this->addColumn('id_donnee_complementaire', 'IdDonneeComplementaire', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTCritereAttributionTableMap
