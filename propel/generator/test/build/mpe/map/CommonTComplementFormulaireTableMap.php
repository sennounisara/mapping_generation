<?php



/**
 * This class defines the structure of the 't_complement_formulaire' table.
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
class CommonTComplementFormulaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTComplementFormulaireTableMap';

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
        $this->setName('t_complement_formulaire');
        $this->setPhpName('CommonTComplementFormulaire');
        $this->setClassname('CommonTComplementFormulaire');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_complement_formulaire', 'IdComplementFormulaire', 'INTEGER', true, null, null);
        $this->addColumn('id_dossier_formulaire', 'IdDossierFormulaire', 'INTEGER', true, null, null);
        $this->addColumn('numero_complement', 'NumeroComplement', 'INTEGER', false, null, null);
        $this->addColumn('date_a_remettre', 'DateARemettre', 'VARCHAR', false, 50, null);
        $this->addColumn('date_remis_le', 'DateRemisLe', 'VARCHAR', false, 50, null);
        $this->addColumn('motif', 'Motif', 'VARCHAR', false, 255, null);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('statut_demande', 'StatutDemande', 'CHAR', true, null, '1');
        $this->getColumn('statut_demande', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTComplementFormulaireTableMap
