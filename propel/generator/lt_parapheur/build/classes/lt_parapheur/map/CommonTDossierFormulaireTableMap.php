<?php



/**
 * This class defines the structure of the 't_dossier_formulaire' table.
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
class CommonTDossierFormulaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTDossierFormulaireTableMap';

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
        $this->setName('t_dossier_formulaire');
        $this->setPhpName('CommonTDossierFormulaire');
        $this->setClassname('CommonTDossierFormulaire');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_dossier_formulaire', 'IdDossierFormulaire', 'INTEGER', true, null, null);
        $this->addForeignKey('id_reponse_elec_formulaire', 'IdReponseElecFormulaire', 'INTEGER', 't_reponse_elec_formulaire', 'id_reponse_elec_formulaire', true, null, null);
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
        $this->addColumn('formulaire_depose', 'FormulaireDepose', 'CHAR', true, null, '0');
        $this->getColumn('formulaire_depose', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('id_dossier_pere', 'IdDossierPere', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTReponseElecFormulaire', 'CommonTReponseElecFormulaire', RelationMap::MANY_TO_ONE, array('id_reponse_elec_formulaire' => 'id_reponse_elec_formulaire', ), null, null);
        $this->addRelation('CommonTEditionFormulaire', 'CommonTEditionFormulaire', RelationMap::ONE_TO_MANY, array('id_dossier_formulaire' => 'id_dossier_formulaire', ), null, null, 'CommonTEditionFormulaires');
    } // buildRelations()

} // CommonTDossierFormulaireTableMap
