<?php



/**
 * This class defines the structure of the 'partage' table.
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
class PartageTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.PartageTableMap';

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
        $this->setName('partage');
        $this->setPhpName('Partage');
        $this->setClassname('Partage');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_PARTAGE', 'IdPartage', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', false, null, null);
        $this->addColumn('ID_AGENT_PARTAGE', 'IdAgentPartage', 'INTEGER', false, null, null);
        $this->addColumn('NOM_AGENT_PARTAGE_FR', 'NomAgentPartageFr', 'VARCHAR', false, 255, null);
        $this->addColumn('NOM_AGENT_PARTAGE_AR', 'NomAgentPartageAr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_PARTAGE_FR', 'PrenomAgentPartageFr', 'VARCHAR', false, 255, null);
        $this->addColumn('PRENOM_AGENT_PARTAGE_AR', 'PrenomAgentPartageAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_AGENT', 'IdAgent', 'INTEGER', false, null, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', false, null, null);
        $this->addColumn('ACTION_ATTENDUE', 'ActionAttendue', 'INTEGER', false, null, null);
        $this->addColumn('COMMENTAIRE', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ID_PIECE_JOINTE', 'IdPieceJointe', 'INTEGER', false, null, null);
        $this->addColumn('NOM_PIECE_JOINTE', 'NomPieceJointe', 'VARCHAR', false, 255, null);
        $this->addColumn('DATE_PARTAGE', 'DatePartage', 'TIMESTAMP', false, null, null);
        $this->addColumn('DATE_RETRAIT', 'DateRetrait', 'TIMESTAMP', false, null, null);
        $this->addColumn('ETAT', 'Etat', 'CHAR', false, null, '0');
        $this->getColumn('ETAT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ETAT_PARTAGE', 'EtatPartage', 'CHAR', false, null, '0');
        $this->getColumn('ETAT_PARTAGE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_RETIRER_PARTAGE', 'DateRetirerPartage', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PartageTableMap
