<?php



/**
 * This class defines the structure of the 'exec_piece_reception' table.
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
class ExecPieceReceptionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.ExecPieceReceptionTableMap';

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
        $this->setName('exec_piece_reception');
        $this->setPhpName('ExecPieceReception');
        $this->setClassname('ExecPieceReception');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_reception', 'IdReception', 'INTEGER', true, null, null);
        $this->addColumn('id_contrat', 'IdContrat', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, null);
        $this->addColumn('taille', 'Taille', 'VARCHAR', false, 255, null);
        $this->addColumn('id_agent_crea', 'IdAgentCrea', 'INTEGER', false, null, null);
        $this->addColumn('date_creat', 'DateCreat', 'TIMESTAMP', true, null, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', true, null, null);
        $this->addColumn('depuis_paraph', 'DepuisParaph', 'CHAR', true, null, '0');
        $this->getColumn('depuis_paraph', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('acces_fournisseur', 'AccesFournisseur', 'CHAR', true, null, '0');
        $this->getColumn('acces_fournisseur', false)->setValueSet(array (
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

} // ExecPieceReceptionTableMap
