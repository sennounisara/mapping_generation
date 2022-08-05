<?php



/**
 * This class defines the structure of the 'echange_citoyen' table.
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
class EchangeCitoyenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.EchangeCitoyenTableMap';

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
        $this->setName('echange_citoyen');
        $this->setPhpName('EchangeCitoyen');
        $this->setClassname('EchangeCitoyen');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 8, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, 8, null);
        $this->addColumn('ID_AGENT', 'IdAgent', 'INTEGER', false, 8, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', true, 8, null);
        $this->addColumn('ID_PIECE_JOINTE', 'IdPieceJointe', 'INTEGER', false, 8, null);
        $this->addColumn('NOM_PIECE_JOINTE', 'NomPieceJointe', 'VARCHAR', false, 255, null);
        $this->addColumn('MESSAGE', 'Message', 'LONGVARCHAR', false, null, null);
        $this->addColumn('DATE_ECHANGE', 'DateEchange', 'TIMESTAMP', false, null, null);
        $this->addColumn('VISUALISER', 'Visualiser', 'CHAR', false, null, '0');
        $this->getColumn('VISUALISER', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_VISUALISATION', 'DateVisualisation', 'TIMESTAMP', false, null, null);
        $this->addColumn('NOM_AGENT_FR', 'NomAgentFr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_AGENT_AR', 'NomAgentAr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_FR', 'PrenomAgentFr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_AR', 'PrenomAgentAr', 'VARCHAR', false, 255, null);
        $this->addColumn('CANAL', 'Canal', 'VARCHAR', false, 50, null);
        $this->addColumn('INFO_CANAL', 'InfoCanal', 'LONGVARCHAR', false, null, null);
        $this->addColumn('REPONDU', 'Repondu', 'CHAR', false, null, '0');
        $this->getColumn('REPONDU', false)->setValueSet(array (
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

} // EchangeCitoyenTableMap
