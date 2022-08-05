<?php



/**
 * This class defines the structure of the 'exec_piece_dossierpaiement' table.
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
class CommonExecPieceDossierpaiementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecPieceDossierpaiementTableMap';

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
        $this->setName('exec_piece_dossierpaiement');
        $this->setPhpName('CommonExecPieceDossierpaiement');
        $this->setClassname('CommonExecPieceDossierpaiement');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_dossier_paiement', 'IdDossierPaiement', 'INTEGER', 'exec_dossier_paiement', 'id', false, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', false, 255, null);
        $this->addColumn('taille', 'Taille', 'VARCHAR', false, 255, null);
        $this->addForeignKey('id_contrat', 'IdContrat', 'INTEGER', 'exec_contrat', 'id_contrat', false, null, null);
        $this->addColumn('id_agent_creat', 'IdAgentCreat', 'INTEGER', false, null, null);
        $this->addColumn('date_creat', 'DateCreat', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecDossierPaiement', 'CommonExecDossierPaiement', RelationMap::MANY_TO_ONE, array('id_dossier_paiement' => 'id', ), null, null);
        $this->addRelation('CommonExecContrat', 'CommonExecContrat', RelationMap::MANY_TO_ONE, array('id_contrat' => 'id_contrat', ), null, null);
    } // buildRelations()

} // CommonExecPieceDossierpaiementTableMap
