<?php



/**
 * This class defines the structure of the 't_type_piece' table.
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
class CommonTTypePieceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTTypePieceTableMap';

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
        $this->setName('t_type_piece');
        $this->setPhpName('CommonTTypePiece');
        $this->setClassname('CommonTTypePiece');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', false, 250, null);
        $this->addColumn('libelle_abrege', 'LibelleAbrege', 'VARCHAR', true, 50, null);
        $this->addColumn('cle_redac', 'CleRedac', 'VARCHAR', false, 50, null);
        $this->addColumn('id_modele', 'IdModele', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTDocumentPieceCollaboratif', 'CommonTDocumentPieceCollaboratif', RelationMap::ONE_TO_MANY, array('id' => 'type_piece', ), null, null, 'CommonTDocumentPieceCollaboratifs');
    } // buildRelations()

} // CommonTTypePieceTableMap
