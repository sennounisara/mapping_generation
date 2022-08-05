<?php



/**
 * This class defines the structure of the 'resultat_analyse' table.
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
class CommonResultatAnalyseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonResultatAnalyseTableMap';

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
        $this->setName('resultat_analyse');
        $this->setPhpName('CommonResultatAnalyse');
        $this->setClassname('CommonResultatAnalyse');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, 0);
        $this->addColumn('id_offre', 'IdOffre', 'INTEGER', true, null, 0);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, 0);
        $this->addColumn('montant_offre', 'MontantOffre', 'VARCHAR', false, 200, null);
        $this->addColumn('note', 'Note', 'VARCHAR', false, 200, null);
        $this->addColumn('classement', 'Classement', 'TINYINT', false, 200, null);
        $this->addColumn('observation', 'Observation', 'VARCHAR', false, 200, null);
        $this->addColumn('type_enveloppe', 'TypeEnveloppe', 'INTEGER', true, 1, 0);
        $this->addColumn('offre_variante', 'OffreVariante', 'CHAR', false, null, null);
        $this->getColumn('offre_variante', false)->setValueSet(array (
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

} // CommonResultatAnalyseTableMap
