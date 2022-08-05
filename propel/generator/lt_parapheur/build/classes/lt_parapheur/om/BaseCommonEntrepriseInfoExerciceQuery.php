<?php


/**
 * Base class that represents a query for the 'Entreprise_info_exercice' table.
 *
 * 
 *
 * @method CommonEntrepriseInfoExerciceQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_Entreprise column
 * @method CommonEntrepriseInfoExerciceQuery orderByDebutexerciceglob($order = Criteria::ASC) Order by the debutExerciceGlob column
 * @method CommonEntrepriseInfoExerciceQuery orderByFinexerciceglob($order = Criteria::ASC) Order by the finExerciceGlob column
 * @method CommonEntrepriseInfoExerciceQuery orderByVentesglob($order = Criteria::ASC) Order by the ventesGlob column
 * @method CommonEntrepriseInfoExerciceQuery orderByBiensglob($order = Criteria::ASC) Order by the biensGlob column
 * @method CommonEntrepriseInfoExerciceQuery orderByServicesglob($order = Criteria::ASC) Order by the servicesGlob column
 * @method CommonEntrepriseInfoExerciceQuery orderByTotalglob($order = Criteria::ASC) Order by the totalGlob column
 * @method CommonEntrepriseInfoExerciceQuery orderByAnneeClotureExercice($order = Criteria::ASC) Order by the annee_cloture_exercice column
 * @method CommonEntrepriseInfoExerciceQuery orderByEffectifMoyen($order = Criteria::ASC) Order by the effectif_moyen column
 * @method CommonEntrepriseInfoExerciceQuery orderByEffectifEncadrement($order = Criteria::ASC) Order by the effectif_encadrement column
 * @method CommonEntrepriseInfoExerciceQuery orderByPme($order = Criteria::ASC) Order by the pme column
 * @method CommonEntrepriseInfoExerciceQuery orderByChiffreAffaires($order = Criteria::ASC) Order by the chiffre_affaires column
 * @method CommonEntrepriseInfoExerciceQuery orderByBesoinExcedentFinancement($order = Criteria::ASC) Order by the besoin_excedent_financement column
 * @method CommonEntrepriseInfoExerciceQuery orderByCashFlow($order = Criteria::ASC) Order by the cash_flow column
 * @method CommonEntrepriseInfoExerciceQuery orderByCapaciteEndettement($order = Criteria::ASC) Order by the capacite_endettement column
 *
 * @method CommonEntrepriseInfoExerciceQuery groupByIdEntreprise() Group by the id_Entreprise column
 * @method CommonEntrepriseInfoExerciceQuery groupByDebutexerciceglob() Group by the debutExerciceGlob column
 * @method CommonEntrepriseInfoExerciceQuery groupByFinexerciceglob() Group by the finExerciceGlob column
 * @method CommonEntrepriseInfoExerciceQuery groupByVentesglob() Group by the ventesGlob column
 * @method CommonEntrepriseInfoExerciceQuery groupByBiensglob() Group by the biensGlob column
 * @method CommonEntrepriseInfoExerciceQuery groupByServicesglob() Group by the servicesGlob column
 * @method CommonEntrepriseInfoExerciceQuery groupByTotalglob() Group by the totalGlob column
 * @method CommonEntrepriseInfoExerciceQuery groupByAnneeClotureExercice() Group by the annee_cloture_exercice column
 * @method CommonEntrepriseInfoExerciceQuery groupByEffectifMoyen() Group by the effectif_moyen column
 * @method CommonEntrepriseInfoExerciceQuery groupByEffectifEncadrement() Group by the effectif_encadrement column
 * @method CommonEntrepriseInfoExerciceQuery groupByPme() Group by the pme column
 * @method CommonEntrepriseInfoExerciceQuery groupByChiffreAffaires() Group by the chiffre_affaires column
 * @method CommonEntrepriseInfoExerciceQuery groupByBesoinExcedentFinancement() Group by the besoin_excedent_financement column
 * @method CommonEntrepriseInfoExerciceQuery groupByCashFlow() Group by the cash_flow column
 * @method CommonEntrepriseInfoExerciceQuery groupByCapaciteEndettement() Group by the capacite_endettement column
 *
 * @method CommonEntrepriseInfoExerciceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEntrepriseInfoExerciceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEntrepriseInfoExerciceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEntrepriseInfoExercice findOne(PropelPDO $con = null) Return the first CommonEntrepriseInfoExercice matching the query
 * @method CommonEntrepriseInfoExercice findOneOrCreate(PropelPDO $con = null) Return the first CommonEntrepriseInfoExercice matching the query, or a new CommonEntrepriseInfoExercice object populated from the query conditions when no match is found
 *
 * @method CommonEntrepriseInfoExercice findOneByIdEntreprise(int $id_Entreprise) Return the first CommonEntrepriseInfoExercice filtered by the id_Entreprise column
 * @method CommonEntrepriseInfoExercice findOneByDebutexerciceglob(string $debutExerciceGlob) Return the first CommonEntrepriseInfoExercice filtered by the debutExerciceGlob column
 * @method CommonEntrepriseInfoExercice findOneByFinexerciceglob(string $finExerciceGlob) Return the first CommonEntrepriseInfoExercice filtered by the finExerciceGlob column
 * @method CommonEntrepriseInfoExercice findOneByVentesglob(string $ventesGlob) Return the first CommonEntrepriseInfoExercice filtered by the ventesGlob column
 * @method CommonEntrepriseInfoExercice findOneByBiensglob(string $biensGlob) Return the first CommonEntrepriseInfoExercice filtered by the biensGlob column
 * @method CommonEntrepriseInfoExercice findOneByServicesglob(string $servicesGlob) Return the first CommonEntrepriseInfoExercice filtered by the servicesGlob column
 * @method CommonEntrepriseInfoExercice findOneByTotalglob(string $totalGlob) Return the first CommonEntrepriseInfoExercice filtered by the totalGlob column
 * @method CommonEntrepriseInfoExercice findOneByAnneeClotureExercice(string $annee_cloture_exercice) Return the first CommonEntrepriseInfoExercice filtered by the annee_cloture_exercice column
 * @method CommonEntrepriseInfoExercice findOneByEffectifMoyen(int $effectif_moyen) Return the first CommonEntrepriseInfoExercice filtered by the effectif_moyen column
 * @method CommonEntrepriseInfoExercice findOneByEffectifEncadrement(int $effectif_encadrement) Return the first CommonEntrepriseInfoExercice filtered by the effectif_encadrement column
 * @method CommonEntrepriseInfoExercice findOneByPme(string $pme) Return the first CommonEntrepriseInfoExercice filtered by the pme column
 * @method CommonEntrepriseInfoExercice findOneByChiffreAffaires(string $chiffre_affaires) Return the first CommonEntrepriseInfoExercice filtered by the chiffre_affaires column
 * @method CommonEntrepriseInfoExercice findOneByBesoinExcedentFinancement(string $besoin_excedent_financement) Return the first CommonEntrepriseInfoExercice filtered by the besoin_excedent_financement column
 * @method CommonEntrepriseInfoExercice findOneByCashFlow(string $cash_flow) Return the first CommonEntrepriseInfoExercice filtered by the cash_flow column
 * @method CommonEntrepriseInfoExercice findOneByCapaciteEndettement(string $capacite_endettement) Return the first CommonEntrepriseInfoExercice filtered by the capacite_endettement column
 *
 * @method array findByIdEntreprise(int $id_Entreprise) Return CommonEntrepriseInfoExercice objects filtered by the id_Entreprise column
 * @method array findByDebutexerciceglob(string $debutExerciceGlob) Return CommonEntrepriseInfoExercice objects filtered by the debutExerciceGlob column
 * @method array findByFinexerciceglob(string $finExerciceGlob) Return CommonEntrepriseInfoExercice objects filtered by the finExerciceGlob column
 * @method array findByVentesglob(string $ventesGlob) Return CommonEntrepriseInfoExercice objects filtered by the ventesGlob column
 * @method array findByBiensglob(string $biensGlob) Return CommonEntrepriseInfoExercice objects filtered by the biensGlob column
 * @method array findByServicesglob(string $servicesGlob) Return CommonEntrepriseInfoExercice objects filtered by the servicesGlob column
 * @method array findByTotalglob(string $totalGlob) Return CommonEntrepriseInfoExercice objects filtered by the totalGlob column
 * @method array findByAnneeClotureExercice(string $annee_cloture_exercice) Return CommonEntrepriseInfoExercice objects filtered by the annee_cloture_exercice column
 * @method array findByEffectifMoyen(int $effectif_moyen) Return CommonEntrepriseInfoExercice objects filtered by the effectif_moyen column
 * @method array findByEffectifEncadrement(int $effectif_encadrement) Return CommonEntrepriseInfoExercice objects filtered by the effectif_encadrement column
 * @method array findByPme(string $pme) Return CommonEntrepriseInfoExercice objects filtered by the pme column
 * @method array findByChiffreAffaires(string $chiffre_affaires) Return CommonEntrepriseInfoExercice objects filtered by the chiffre_affaires column
 * @method array findByBesoinExcedentFinancement(string $besoin_excedent_financement) Return CommonEntrepriseInfoExercice objects filtered by the besoin_excedent_financement column
 * @method array findByCashFlow(string $cash_flow) Return CommonEntrepriseInfoExercice objects filtered by the cash_flow column
 * @method array findByCapaciteEndettement(string $capacite_endettement) Return CommonEntrepriseInfoExercice objects filtered by the capacite_endettement column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEntrepriseInfoExerciceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEntrepriseInfoExerciceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEntrepriseInfoExercice', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEntrepriseInfoExerciceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEntrepriseInfoExerciceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEntrepriseInfoExerciceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEntrepriseInfoExerciceQuery) {
            return $criteria;
        }
        $query = new CommonEntrepriseInfoExerciceQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id_Entreprise, $annee_cloture_exercice]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonEntrepriseInfoExercice|CommonEntrepriseInfoExercice[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEntrepriseInfoExercicePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInfoExercicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonEntrepriseInfoExercice A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_Entreprise`, `debutExerciceGlob`, `finExerciceGlob`, `ventesGlob`, `biensGlob`, `servicesGlob`, `totalGlob`, `annee_cloture_exercice`, `effectif_moyen`, `effectif_encadrement`, `pme`, `chiffre_affaires`, `besoin_excedent_financement`, `cash_flow`, `capacite_endettement` FROM `Entreprise_info_exercice` WHERE `id_Entreprise` = :p0 AND `annee_cloture_exercice` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonEntrepriseInfoExercice();
            $obj->hydrate($row);
            CommonEntrepriseInfoExercicePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonEntrepriseInfoExercice|CommonEntrepriseInfoExercice[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonEntrepriseInfoExercice[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_Entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_Entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_Entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_Entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_Entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the debutExerciceGlob column
     *
     * Example usage:
     * <code>
     * $query->filterByDebutexerciceglob('fooValue');   // WHERE debutExerciceGlob = 'fooValue'
     * $query->filterByDebutexerciceglob('%fooValue%'); // WHERE debutExerciceGlob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $debutexerciceglob The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByDebutexerciceglob($debutexerciceglob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($debutexerciceglob)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $debutexerciceglob)) {
                $debutexerciceglob = str_replace('*', '%', $debutexerciceglob);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::DEBUTEXERCICEGLOB, $debutexerciceglob, $comparison);
    }

    /**
     * Filter the query on the finExerciceGlob column
     *
     * Example usage:
     * <code>
     * $query->filterByFinexerciceglob('fooValue');   // WHERE finExerciceGlob = 'fooValue'
     * $query->filterByFinexerciceglob('%fooValue%'); // WHERE finExerciceGlob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $finexerciceglob The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByFinexerciceglob($finexerciceglob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($finexerciceglob)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $finexerciceglob)) {
                $finexerciceglob = str_replace('*', '%', $finexerciceglob);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::FINEXERCICEGLOB, $finexerciceglob, $comparison);
    }

    /**
     * Filter the query on the ventesGlob column
     *
     * Example usage:
     * <code>
     * $query->filterByVentesglob('fooValue');   // WHERE ventesGlob = 'fooValue'
     * $query->filterByVentesglob('%fooValue%'); // WHERE ventesGlob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventesglob The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByVentesglob($ventesglob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventesglob)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventesglob)) {
                $ventesglob = str_replace('*', '%', $ventesglob);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::VENTESGLOB, $ventesglob, $comparison);
    }

    /**
     * Filter the query on the biensGlob column
     *
     * Example usage:
     * <code>
     * $query->filterByBiensglob('fooValue');   // WHERE biensGlob = 'fooValue'
     * $query->filterByBiensglob('%fooValue%'); // WHERE biensGlob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $biensglob The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByBiensglob($biensglob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($biensglob)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $biensglob)) {
                $biensglob = str_replace('*', '%', $biensglob);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::BIENSGLOB, $biensglob, $comparison);
    }

    /**
     * Filter the query on the servicesGlob column
     *
     * Example usage:
     * <code>
     * $query->filterByServicesglob('fooValue');   // WHERE servicesGlob = 'fooValue'
     * $query->filterByServicesglob('%fooValue%'); // WHERE servicesGlob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicesglob The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByServicesglob($servicesglob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicesglob)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicesglob)) {
                $servicesglob = str_replace('*', '%', $servicesglob);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::SERVICESGLOB, $servicesglob, $comparison);
    }

    /**
     * Filter the query on the totalGlob column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalglob('fooValue');   // WHERE totalGlob = 'fooValue'
     * $query->filterByTotalglob('%fooValue%'); // WHERE totalGlob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $totalglob The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByTotalglob($totalglob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($totalglob)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $totalglob)) {
                $totalglob = str_replace('*', '%', $totalglob);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::TOTALGLOB, $totalglob, $comparison);
    }

    /**
     * Filter the query on the annee_cloture_exercice column
     *
     * Example usage:
     * <code>
     * $query->filterByAnneeClotureExercice('fooValue');   // WHERE annee_cloture_exercice = 'fooValue'
     * $query->filterByAnneeClotureExercice('%fooValue%'); // WHERE annee_cloture_exercice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anneeClotureExercice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByAnneeClotureExercice($anneeClotureExercice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anneeClotureExercice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $anneeClotureExercice)) {
                $anneeClotureExercice = str_replace('*', '%', $anneeClotureExercice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE, $anneeClotureExercice, $comparison);
    }

    /**
     * Filter the query on the effectif_moyen column
     *
     * Example usage:
     * <code>
     * $query->filterByEffectifMoyen(1234); // WHERE effectif_moyen = 1234
     * $query->filterByEffectifMoyen(array(12, 34)); // WHERE effectif_moyen IN (12, 34)
     * $query->filterByEffectifMoyen(array('min' => 12)); // WHERE effectif_moyen >= 12
     * $query->filterByEffectifMoyen(array('max' => 12)); // WHERE effectif_moyen <= 12
     * </code>
     *
     * @param     mixed $effectifMoyen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByEffectifMoyen($effectifMoyen = null, $comparison = null)
    {
        if (is_array($effectifMoyen)) {
            $useMinMax = false;
            if (isset($effectifMoyen['min'])) {
                $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::EFFECTIF_MOYEN, $effectifMoyen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($effectifMoyen['max'])) {
                $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::EFFECTIF_MOYEN, $effectifMoyen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::EFFECTIF_MOYEN, $effectifMoyen, $comparison);
    }

    /**
     * Filter the query on the effectif_encadrement column
     *
     * Example usage:
     * <code>
     * $query->filterByEffectifEncadrement(1234); // WHERE effectif_encadrement = 1234
     * $query->filterByEffectifEncadrement(array(12, 34)); // WHERE effectif_encadrement IN (12, 34)
     * $query->filterByEffectifEncadrement(array('min' => 12)); // WHERE effectif_encadrement >= 12
     * $query->filterByEffectifEncadrement(array('max' => 12)); // WHERE effectif_encadrement <= 12
     * </code>
     *
     * @param     mixed $effectifEncadrement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByEffectifEncadrement($effectifEncadrement = null, $comparison = null)
    {
        if (is_array($effectifEncadrement)) {
            $useMinMax = false;
            if (isset($effectifEncadrement['min'])) {
                $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::EFFECTIF_ENCADREMENT, $effectifEncadrement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($effectifEncadrement['max'])) {
                $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::EFFECTIF_ENCADREMENT, $effectifEncadrement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::EFFECTIF_ENCADREMENT, $effectifEncadrement, $comparison);
    }

    /**
     * Filter the query on the pme column
     *
     * Example usage:
     * <code>
     * $query->filterByPme('fooValue');   // WHERE pme = 'fooValue'
     * $query->filterByPme('%fooValue%'); // WHERE pme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByPme($pme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pme)) {
                $pme = str_replace('*', '%', $pme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::PME, $pme, $comparison);
    }

    /**
     * Filter the query on the chiffre_affaires column
     *
     * Example usage:
     * <code>
     * $query->filterByChiffreAffaires('fooValue');   // WHERE chiffre_affaires = 'fooValue'
     * $query->filterByChiffreAffaires('%fooValue%'); // WHERE chiffre_affaires LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chiffreAffaires The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByChiffreAffaires($chiffreAffaires = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chiffreAffaires)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chiffreAffaires)) {
                $chiffreAffaires = str_replace('*', '%', $chiffreAffaires);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::CHIFFRE_AFFAIRES, $chiffreAffaires, $comparison);
    }

    /**
     * Filter the query on the besoin_excedent_financement column
     *
     * Example usage:
     * <code>
     * $query->filterByBesoinExcedentFinancement('fooValue');   // WHERE besoin_excedent_financement = 'fooValue'
     * $query->filterByBesoinExcedentFinancement('%fooValue%'); // WHERE besoin_excedent_financement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $besoinExcedentFinancement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByBesoinExcedentFinancement($besoinExcedentFinancement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($besoinExcedentFinancement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $besoinExcedentFinancement)) {
                $besoinExcedentFinancement = str_replace('*', '%', $besoinExcedentFinancement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::BESOIN_EXCEDENT_FINANCEMENT, $besoinExcedentFinancement, $comparison);
    }

    /**
     * Filter the query on the cash_flow column
     *
     * Example usage:
     * <code>
     * $query->filterByCashFlow('fooValue');   // WHERE cash_flow = 'fooValue'
     * $query->filterByCashFlow('%fooValue%'); // WHERE cash_flow LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cashFlow The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByCashFlow($cashFlow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cashFlow)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cashFlow)) {
                $cashFlow = str_replace('*', '%', $cashFlow);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::CASH_FLOW, $cashFlow, $comparison);
    }

    /**
     * Filter the query on the capacite_endettement column
     *
     * Example usage:
     * <code>
     * $query->filterByCapaciteEndettement('fooValue');   // WHERE capacite_endettement = 'fooValue'
     * $query->filterByCapaciteEndettement('%fooValue%'); // WHERE capacite_endettement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $capaciteEndettement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function filterByCapaciteEndettement($capaciteEndettement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($capaciteEndettement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $capaciteEndettement)) {
                $capaciteEndettement = str_replace('*', '%', $capaciteEndettement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInfoExercicePeer::CAPACITE_ENDETTEMENT, $capaciteEndettement, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEntrepriseInfoExercice $commonEntrepriseInfoExercice Object to remove from the list of results
     *
     * @return CommonEntrepriseInfoExerciceQuery The current query, for fluid interface
     */
    public function prune($commonEntrepriseInfoExercice = null)
    {
        if ($commonEntrepriseInfoExercice) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE), $commonEntrepriseInfoExercice->getIdEntreprise(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE), $commonEntrepriseInfoExercice->getAnneeClotureExercice(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
