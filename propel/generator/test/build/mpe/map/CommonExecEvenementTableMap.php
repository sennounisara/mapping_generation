<?php



/**
 * This class defines the structure of the 'exec_evenement' table.
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
class CommonExecEvenementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecEvenementTableMap';

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
        $this->setName('exec_evenement');
        $this->setPhpName('CommonExecEvenement');
        $this->setClassname('CommonExecEvenement');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_type_evenement', 'IdTypeEvenement', 'INTEGER', 'exec_type_evenement', 'id', true, null, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', true, null, null);
        $this->addForeignKey('id_contractant', 'IdContractant', 'INTEGER', 'exec_contractant', 'id', true, null, null);
        $this->addForeignKey('id_phase', 'IdPhase', 'INTEGER', 'exec_phase', 'id', false, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', false, 1, null);
        $this->addColumn('date', 'Date', 'TIMESTAMP', true, null, null);
        $this->addColumn('date_document', 'DateDocument', 'TIMESTAMP', false, null, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('origine_piece', 'OriginePiece', 'INTEGER', true, 1, null);
        $this->addColumn('date_validation', 'DateValidation', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_rejet', 'DateRejet', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('id_agent_validation', 'IdAgentValidation', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addForeignKey('id_agent_rejet', 'IdAgentRejet', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addColumn('date_crea', 'DateCrea', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('id_agent_crea', 'IdAgentCrea', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addColumn('date_modif', 'DateModif', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('id_agent_modif', 'IdAgentModif', 'INTEGER', 'Agent', 'id', false, null, null);
        $this->addColumn('id_parapheur', 'IdParapheur', 'INTEGER', false, null, null);
        $this->addColumn('date_cloture_parapheur', 'DateClotureParapheur', 'TIMESTAMP', false, null, null);
        $this->addColumn('motif_rejet', 'MotifRejet', 'VARCHAR', false, 255, null);
        $this->addColumn('motif_darret', 'MotifDarret', 'VARCHAR', false, 255, null);
        $this->addColumn('type_reception', 'TypeReception', 'CHAR', false, null, null);
        $this->getColumn('type_reception', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('porte_reception', 'PorteReception', 'CHAR', false, null, null);
        $this->getColumn('porte_reception', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('mode_prononce_reception', 'ModePrononceReception', 'CHAR', false, null, null);
        $this->getColumn('mode_prononce_reception', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('penalite_retard', 'PenaliteRetard', 'CHAR', false, null, null);
        $this->getColumn('penalite_retard', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('prestation_reception', 'PrestationReception', 'LONGVARCHAR', false, null, null);
        $this->addColumn('date_reserve', 'DateReserve', 'TIMESTAMP', false, null, null);
        $this->addColumn('delai_maximal_reserves', 'DelaiMaximalReserves', 'INTEGER', false, null, 0);
        $this->addColumn('detail_reserve', 'DetailReserve', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ordre_evenement', 'OrdreEvenement', 'INTEGER', false, null, null);
        $this->addColumn('demande', 'Demande', 'CHAR', false, null, null);
        $this->getColumn('demande', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('id_parent', 'IdParent', 'INTEGER', false, null, 0);
        $this->addColumn('date_derniere_synchronisation', 'DateDerniereSynchronisation', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonAgentRelatedByIdAgentCrea', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_crea' => 'id', ), null, null);
        $this->addRelation('CommonAgentRelatedByIdAgentModif', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_modif' => 'id', ), null, null);
        $this->addRelation('CommonAgentRelatedByIdAgentRejet', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_rejet' => 'id', ), null, null);
        $this->addRelation('CommonAgentRelatedByIdAgentValidation', 'CommonAgent', RelationMap::MANY_TO_ONE, array('id_agent_validation' => 'id', ), null, null);
        $this->addRelation('CommonExecContractant', 'CommonExecContractant', RelationMap::MANY_TO_ONE, array('id_contractant' => 'id', ), null, null);
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
        $this->addRelation('CommonExecPhase', 'CommonExecPhase', RelationMap::MANY_TO_ONE, array('id_phase' => 'id', ), null, null);
        $this->addRelation('CommonExecTypeEvenement', 'CommonExecTypeEvenement', RelationMap::MANY_TO_ONE, array('id_type_evenement' => 'id', ), null, null);
        $this->addRelation('CommonExecPieceEvenement', 'CommonExecPieceEvenement', RelationMap::ONE_TO_MANY, array('id' => 'id_evenement', ), null, null, 'CommonExecPieceEvenements');
    } // buildRelations()

} // CommonExecEvenementTableMap
