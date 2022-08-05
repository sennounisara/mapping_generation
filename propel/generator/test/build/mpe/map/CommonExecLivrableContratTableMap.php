<?php



/**
 * This class defines the structure of the 'exec_livrable_contrat' table.
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
class CommonExecLivrableContratTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecLivrableContratTableMap';

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
        $this->setName('exec_livrable_contrat');
        $this->setPhpName('CommonExecLivrableContrat');
        $this->setClassname('CommonExecLivrableContrat');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', true, null, null);
        $this->addColumn('id_phase', 'IdPhase', 'INTEGER', false, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, null);
        $this->addColumn('taille', 'Taille', 'VARCHAR', false, 255, null);
        $this->addForeignKey('id_agent_crea', 'IdAgentCrea', 'INTEGER', 'Agent', 'id', true, null, null);
        $this->addColumn('date_creat', 'DateCreat', 'TIMESTAMP', true, null, null);
        $this->addColumn('id_agent_modif', 'IdAgentModif', 'INTEGER', false, null, null);
        $this->addColumn('date_modif', 'DateModif', 'INTEGER', false, null, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', true, null, null);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', false, 255, null);
        $this->addColumn('statut', 'Statut', 'CHAR', false, null, null);
        $this->getColumn('statut', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonAgent', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_crea' => 'id', ), null, null);
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
    } // buildRelations()

} // CommonExecLivrableContratTableMap
