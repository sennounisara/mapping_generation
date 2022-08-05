<?php



/**
 * This class defines the structure of the 'Chorus_numero_sequence' table.
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
class CommonChorusNumeroSequenceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonChorusNumeroSequenceTableMap';

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
        $this->setName('Chorus_numero_sequence');
        $this->setPhpName('CommonChorusNumeroSequence');
        $this->setClassname('CommonChorusNumeroSequence');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 50, null);
        $this->addColumn('numero', 'Numero', 'VARCHAR', true, 20, null);
        $this->addColumn('type_fichier', 'TypeFichier', 'VARCHAR', false, 20, 'FEN');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonChorusNumeroSequenceTableMap
