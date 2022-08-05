<?php



/**
 * This class defines the structure of the 't_circuit_papier' table.
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
class TCircuitPapierTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TCircuitPapierTableMap';

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
        $this->setName('t_circuit_papier');
        $this->setPhpName('TCircuitPapier');
        $this->setClassname('TCircuitPapier');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_CIRCUIT', 'IdCircuit', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, null, null);
        $this->addColumn('ID_AGENT_EMETTEUR', 'IdAgentEmetteur', 'INTEGER', true, null, null);
        $this->addColumn('ID_AGENT_DESTINATAIRE', 'IdAgentDestinataire', 'INTEGER', false, null, null);
        $this->addColumn('ID_ENTITE_DESTINATAIRE', 'IdEntiteDestinataire', 'INTEGER', true, null, null);
        $this->addColumn('DATE_ENVOI', 'DateEnvoi', 'DATE', true, null, null);
        $this->addColumn('DATE_RECEPTION', 'DateReception', 'DATE', false, null, null);
        $this->addColumn('RECU', 'Recu', 'CHAR', true, null, '0');
        $this->getColumn('RECU', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('EMPLACEMENT', 'Emplacement', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TCircuitPapierTableMap
