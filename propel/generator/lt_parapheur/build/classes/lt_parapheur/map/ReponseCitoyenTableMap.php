<?php



/**
 * This class defines the structure of the 'reponse_citoyen' table.
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
class ReponseCitoyenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.ReponseCitoyenTableMap';

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
        $this->setName('reponse_citoyen');
        $this->setPhpName('ReponseCitoyen');
        $this->setClassname('ReponseCitoyen');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_REPONSE', 'IdReponse', 'INTEGER', true, null, null);
        $this->addColumn('ID_ECHANGE', 'IdEchange', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', false, null, null);
        $this->addColumn('ID_PIECE_JOINTE', 'IdPieceJointe', 'INTEGER', false, null, null);
        $this->addColumn('NOM_PIECE_JOINTE', 'NomPieceJointe', 'VARCHAR', false, 255, null);
        $this->addColumn('MESSAGE', 'Message', 'LONGVARCHAR', false, null, null);
        $this->addColumn('DATE_REPONSE', 'DateReponse', 'TIMESTAMP', false, null, null);
        $this->addColumn('VISUALISER', 'Visualiser', 'CHAR', false, null, '0');
        $this->getColumn('VISUALISER', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('LIE_AUX_ANNEXES', 'LieAuxAnnexes', 'CHAR', true, null, '0');
        $this->getColumn('LIE_AUX_ANNEXES', false)->setValueSet(array (
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

} // ReponseCitoyenTableMap
