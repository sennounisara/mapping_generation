<?php



/**
 * This class defines the structure of the 'bloc_notes' table.
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
class BlocNotesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.BlocNotesTableMap';

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
        $this->setName('bloc_notes');
        $this->setPhpName('BlocNotes');
        $this->setClassname('BlocNotes');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_NOTE', 'IdNote', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', false, null, null);
        $this->addColumn('TEXTE_NOTE', 'TexteNote', 'LONGVARCHAR', false, null, null);
        $this->addColumn('DATE_NOTE', 'DateNote', 'TIMESTAMP', false, null, null);
        $this->addColumn('ID_PIECE_JOINTE', 'IdPieceJointe', 'INTEGER', false, null, null);
        $this->addColumn('NOM_PIECE_JOINTE', 'NomPieceJointe', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', false, null, null);
        $this->addColumn('ID_AGENT', 'IdAgent', 'INTEGER', false, null, null);
        $this->addColumn('NOM_AGENT_FR', 'NomAgentFr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_AGENT_AR', 'NomAgentAr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_FR', 'PrenomAgentFr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_AR', 'PrenomAgentAr', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // BlocNotesTableMap
