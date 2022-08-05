<?php



/**
 * This class defines the structure of the 'exec_piece' table.
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
class CommonExecPieceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonExecPieceTableMap';

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
        $this->setName('exec_piece');
        $this->setPhpName('CommonExecPiece');
        $this->setClassname('CommonExecPiece');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', true, null, null);
        $this->addForeignKey('id_type_piece', 'IdTypePiece', 'INTEGER', 'exec_type_piece', 'id', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, null);
        $this->addColumn('taille', 'Taille', 'VARCHAR', false, 255, null);
        $this->addColumn('id_agent_crea', 'IdAgentCrea', 'INTEGER', true, null, null);
        $this->addColumn('date_creat', 'DateCreat', 'TIMESTAMP', true, null, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
        $this->addRelation('CommonExecTypePiece', 'CommonExecTypePiece', RelationMap::MANY_TO_ONE, array('id_type_piece' => 'id', ), null, null);
    } // buildRelations()

} // CommonExecPieceTableMap
