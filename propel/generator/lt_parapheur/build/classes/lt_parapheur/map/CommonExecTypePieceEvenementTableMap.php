<?php



/**
 * This class defines the structure of the 'exec_type_piece_evenement' table.
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
class CommonExecTypePieceEvenementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonExecTypePieceEvenementTableMap';

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
        $this->setName('exec_type_piece_evenement');
        $this->setPhpName('CommonExecTypePieceEvenement');
        $this->setClassname('CommonExecTypePieceEvenement');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, null);
        $this->addColumn('libelle_fr', 'LibelleFr', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_ar', 'LibelleAr', 'VARCHAR', false, 255, null);
        $this->addColumn('libelle_en', 'LibelleEn', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecPieceEvenement', 'CommonExecPieceEvenement', RelationMap::ONE_TO_MANY, array('id' => 'id_type_piece', ), null, null, 'CommonExecPieceEvenements');
    } // buildRelations()

} // CommonExecTypePieceEvenementTableMap
