<?php



/**
 * This class defines the structure of the 't_enveloppe_dossier_formulaire' table.
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
class CommonTEnveloppeDossierFormulaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTEnveloppeDossierFormulaireTableMap';

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
        $this->setName('t_enveloppe_dossier_formulaire');
        $this->setPhpName('CommonTEnveloppeDossierFormulaire');
        $this->setClassname('CommonTEnveloppeDossierFormulaire');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_enveloppe_dossier_formulaire', 'IdEnveloppeDossierFormulaire', 'INTEGER', true, null, null);
        $this->addColumn('id_dossier_formulaire', 'IdDossierFormulaire', 'INTEGER', true, null, null);
        $this->addColumn('id_enveloppe', 'IdEnveloppe', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('id_lot', 'IdLot', 'INTEGER', false, null, null);
        $this->addColumn('type_enveloppe', 'TypeEnveloppe', 'INTEGER', true, 1, null);
        $this->addColumn('libelle_forrmulaire', 'LibelleForrmulaire', 'VARCHAR', true, 255, null);
        $this->addColumn('cle_externe_dispositif', 'CleExterneDispositif', 'INTEGER', true, null, null);
        $this->addColumn('cle_externe_dossier', 'CleExterneDossier', 'INTEGER', false, null, null);
        $this->addColumn('statut_validation', 'StatutValidation', 'CHAR', true, null, null);
        $this->getColumn('statut_validation', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
));
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', false, 255, null);
        $this->addColumn('date_modif', 'DateModif', 'VARCHAR', false, 255, null);
        $this->addColumn('date_validation', 'DateValidation', 'VARCHAR', false, 255, null);
        $this->addColumn('statut_generation_globale', 'StatutGenerationGlobale', 'INTEGER', false, 1, null);
        $this->addColumn('type_reponse', 'TypeReponse', 'INTEGER', false, null, 1);
        $this->addColumn('cle_externe_formulaire', 'CleExterneFormulaire', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonTEnveloppeDossierFormulaireTableMap
