<?php



/**
 * This class defines the structure of the 't_historique_consultation' table.
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
class THistoriqueConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.THistoriqueConsultationTableMap';

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
        $this->setName('t_historique_consultation');
        $this->setPhpName('THistoriqueConsultation');
        $this->setClassname('THistoriqueConsultation');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('ID_DEMANDE', 'IdDemande', 'INTEGER', 'demande', 'ID', true, null, null);
        $this->addForeignKey('ID_AGENT', 'IdAgent', 'INTEGER', 'agent', 'ID', true, null, null);
        $this->addColumn('TYPE', 'Type', 'CHAR', true, null, null);
        $this->getColumn('TYPE', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
));
        $this->addColumn('DATE_CONSULTATION', 'DateConsultation', 'DATE', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Agent', 'Agent', RelationMap::MANY_TO_ONE, array('ID_AGENT' => 'ID', ), null, null);
        $this->addRelation('Demande', 'Demande', RelationMap::MANY_TO_ONE, array('ID_DEMANDE' => 'ID', ), null, null);
    } // buildRelations()

} // THistoriqueConsultationTableMap
